<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'idreservation';
    protected $fillable = [
        'idreservation',
        'idannonce',
        'iduser',
        'date_debut',
        'date_fin',
    ];


    public function annonce(){
        return $this->belongsTo(Annonce::class);
    }
}