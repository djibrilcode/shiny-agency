<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mode_reglement () {
        return $this->belongsTo(ModeReglement::class);
    }

    public function etat () {
        return $this->belongsTo(Etat::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }


    public function details_commandes () {
        return $this->hasMany(DetailsCommande::class);
    }

}
