<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournee extends Model
{
    use HasFactory;
    protected $fillable = ['label'];

    public function abonnee()
    {
        return $this->hasMany(Abonnee::class);
    }

}
