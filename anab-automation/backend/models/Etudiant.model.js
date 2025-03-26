import mongoose from "mongoose";

const etudiantSchema = new mongoose.Schema({
  nom: {
    type: String,
    required: true,
  },
  prenom: {
    type: String,
    required: true,
  },
  email: {
    type: String,
    unique: true,
    required: true,
  },
  niveau: {
    type: String, 
    required: true,
  },
  bourse: {
    type: String,
    require: true,
  },
  montant: {
    type: Number,
    required: true,
  },
  statut: {
    type: String,
    default: 'En attente'
  }
});

const Etudiant = mongoose.model('Etudiannt', etudiantSchema);

export default Etudiant;