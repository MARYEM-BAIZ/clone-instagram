<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function enregistrements(){
        return $this->hasMany(Enregistrement::class);
    }

}
