<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    public function typepokemon(){
        return $this->belongsTo(Typepokemon::class);
    }
}
