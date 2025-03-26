<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousFamille extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['libelle_sous_famille'];

    public function famille()
    {
        return $this->belongsTo(famille::class);
    }

    public function produits(){
        return $this->hasMany(Produit::class);
    }
}
