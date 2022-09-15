<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    public function role()
    {
        return $this->belongsTo(Role::class, 'roles_id', 'id');
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class, 'photos_id', 'id');
    }
}
