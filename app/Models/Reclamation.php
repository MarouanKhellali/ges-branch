<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    protected $fillable = ['police_rec','nature_rec','adresse_rec', 'date_rec', 'branchement_id' , 'telephone' ,'date_rep' ,'tournee' ];
    
    
    public function branchement()
    {
        return $this->belongsTo(Branchement::class, 'branchamant_id');
    }
}
