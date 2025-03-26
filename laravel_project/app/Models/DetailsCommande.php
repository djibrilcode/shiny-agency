<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsCommande extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function produit(){
        return $this->belongsTo(Produit::class);
    }

    public function commande(){
        return $this->belongsTo(Commande::class);
    }
}
