<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    protected $fillable = ['nature_rec', 'date_rec', 'branchement_id' , 'n_police' ,'date_rep' ,'tournee_id' ];
    
    
    public function branchement()
    {
        return $this->belongsTo(Branchement::class);
    }
    public function abounee()
    {
        return $this->belongsTo(Abonnee::class);
    }
}
