<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchement extends Model
{
    use HasFactory;
    protected $fillable = ['n_order', 'n_police', 'nature', 'n_tournee'];

    public function tournees()
    {
        return $this->belongsTo(Tournee::class, 'n_tournee');
    }
}
