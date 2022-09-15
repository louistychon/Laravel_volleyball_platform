<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipes extends Model
{
    use HasFactory;


    public function continent()
    {
        return $this->belongsTo(Continents::class, 'continents_id', 'id');
    }
}
