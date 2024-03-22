<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'email',
        'num_mobile',
        'date_recrutement',
        'numero_service',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'numero_service');
    }
}

