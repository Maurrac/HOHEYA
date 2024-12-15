<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'proprietaire_id',
        'titre',
        'description',
        'localisation',
        'prix',
        'type',
        'status',
        'files'
    ];

    public function proprietaire()
    {
        return $this->belongsTo(User::class, 'proprietaire_id');
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class, 'annonce_id');
    }
}
