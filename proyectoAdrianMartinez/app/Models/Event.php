<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Conecta con los usuarios que forman parte del evento
    public function miembros()
    {
        return $this->belongsToMany(User::class);
    }
}
