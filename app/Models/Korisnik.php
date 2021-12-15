<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    public $timestamps = false;

    public $table = 'korisnici';
    use HasFactory;
}
