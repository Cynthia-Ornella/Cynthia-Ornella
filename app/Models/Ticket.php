<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        "identifiant",
        "mot_de_passe",
        "tarif_id",
        "is_used"
    ];

}
