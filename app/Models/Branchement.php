<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchement extends Model
{
    use HasFactory;
    protected $fillable = ['n_order', 'n_police', 'nature', 'tournee' ,'n_abonnee' ,'nom', 'cne', 'adresse_branch','l_branch','l_chaussée', 'nature_chaussée','date_ver','n_ver','date_reg','date_realisation','dn_cond','n_serie','observation'];

    
    public function abonnees()
    {
        return $this->belongsTo(Abonnee::class, 'n_abonnee');
    }
}