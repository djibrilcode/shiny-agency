<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sous_famille(){
        return $this->belongsTo(SousFamille::class, 'sous_famille_id');
    }
    public function marque(){
        return $this->belongsTo(Marque::class, 'marque_id');
    }
    public function unite(){
        return $this->belongsTo(Unite::class,'unite_id');
    }
    public function details_commandes () {
        return $this->hasMany(DetailsCommande::class);
    }
}
