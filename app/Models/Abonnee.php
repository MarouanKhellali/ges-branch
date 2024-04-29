<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnee extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'cne', 'adresse', 'telephone' ,'police_abonnee'];

    
}
