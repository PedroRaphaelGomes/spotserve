<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

      public function musicas(){
        return $this->belongsToMany(Musica::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
    
}
