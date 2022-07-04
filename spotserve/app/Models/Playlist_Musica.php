<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist_Musica extends Model
{
    use HasFactory;

    //return $this->belongsToMany(Role::class);
    public function musicas(){
        return $this->hasMany(Musica::class);
    }

    public function playlists(){
        return $this->hasMany(Playlist::class);
    }
    
}
