<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Famille extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sousFamilles()
    {
        return $this->belongsToMany(sousFamille::class);
    }
}
