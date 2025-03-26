import dotenv  from 'dotenv';
import express from 'express';
import jwt from 'jsonwebtoken'
import { MongoClient, ObjectId } from 'mongodb';
dotenv.config();
const PORT = process.env.Port || 5002;
const app = express();
app.use(express.json());

const url = process.env.MONGO_URI;
const client = new MongoClient(url);
async function connectDB() {
  try {
    await client.connect();
    console.log('🟢 MongoDB connected')
  } catch (error) {
    console.log("🔴 MondoDB no connécté ",error.message)
  }
}

// connectDB()
app.listen(PORT, () => {
  connectDB();
  console.log(`🚀 Serveur en cours sur le port http://127.0.0.1:${PORT}`);
});

const db = client.db('anabDB');
const collection = db.collection('etudiants');

// liste des users
const users = [
  {login:"Alami", pass:"12345"},
  {login:"Zakaria", pass:"54321"},
  {login:"Fatima", pass:"09876"}
];

app.post('/auth', (req, res) => {
  const {login,pass} = req.body;
  const validate = users.some((user) => user.login == login && user.pass == pass);

  const token = jwt.sign({login:login}, 'RANDOM_TOKEN_SECRET', {expiresIn :'24h'});

  if(validate) {
    res.status(200).json({success: true, data:`connexion reuissie ${token}`})
  } else {
    res.status(404).json({succes:false, message:"Erreur de connexion !"})
  }
})

app.get('/', (req,res) => {
  res.send('Hello I\'m the Home Page')
})

app.get('/api/etudiant', async(req, res) => {
  try {
    const et = req.body
    const etudiants = await collection.find({}).toArray();
    res.status(200).json({ success: true, data: etudiants})
  } catch (error) {
    console.log("errur lors de la récupération ", error);
    res.status(404).json({ success: false, message:"serveur erreur"})
  }
})

app.post('/api/etudiant', async (req, res) => {
  const etudiant = req.body;

  // if(!etudiant.name || !etudiant.prenom || !etudiant.email || !etudiant.niveau || !etudiant.bourse || !etudiant.montant || !etudiant.status) {
  //   res.status(400).json({ success:false, message:"please provide all fiel"})
  // }


  try {
    const result = await collection.insertOne(etudiant);
    res.status(201).json({ success:true, message:"etudiant ajouté", id:result.insertedId })
  } catch (error) {
    console.log('erreur lors de la création de l\' etudiant:', error.message);
    res.status(500).json({ success:false, message:"server error"});
  }
})

app.put('/api/etudiant/:id', async (req, res)  => {
  const {id} = req.params
  const updateEtudiant = req.body;
  try {
    const result = await collection.updateOne(
      {_id: new ObjectId(id)},
      { $set:updateEtudiant }
    );
    if(result.modifiedCount === 0) {
      return res.status(404).json({message:"etudiant non trouvé"})
    }

    res.status(200).json({ success:true, data:result})
  } catch (error) {
    res.status(500).json({message:"erreur serveur", error})
  }
})

app.delete('/api/etudiant/:id', async (req, res)  => {
  const {id} = req.params
  try {
    const result = await collection.deleteOne(
      {_id: new ObjectId(id)}
    );
    if(result.deletedCount === 0) {
      return res.status(404).json({success:false, message:"etudiant non trouvé"})
    }

    res.status(200).json({ success:true, message:"etudiant supprimé"})
  } catch (error) {
    res.status(500).json({message:"erreur serveur", error})
  }
})