<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trosak extends Model
{
    use HasFactory;
    protected $table = 'trosak';

    protected $fillable = ['datum', 'iznos', 'komentar'];
}
