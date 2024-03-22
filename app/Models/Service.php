<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_service',
        'nom_service',
        'nombre_employe',
    ];

    public function personnels()
    {
        return $this->hasMany(Personnel::class, 'numero_service');
    }
}

