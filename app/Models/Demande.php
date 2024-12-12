<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = [
        'annonce_id',
        'etudiant_id',
        'message',
        'statut',
    ];

    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }

    public function etudiant()
    {
        return $this->belongsTo(User::class, 'etudiant_id');
    }
}
