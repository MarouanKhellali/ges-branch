<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournee extends Model
{
    use HasFactory;
    protected $fillable = ['label', 'abonnee_id'];

    public function abonnee()
    {
        return $this->belongsTo(Abonnee::class);
    }

}
