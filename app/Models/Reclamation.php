<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'date_creation', 'branchement_id'];
    public static $typeOptions = ['A', 'B', 'C'];
    public static function getTypeOptions()
    {
        return self::$typeOptions;
    }
    public function branchement()
    {
        return $this->belongsTo(Branchement::class);
    }
}
