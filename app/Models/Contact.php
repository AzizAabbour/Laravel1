<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    // Champs autorisés pour l'assignation de masse
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}