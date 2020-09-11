<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raspored extends Model
{
    use HasFactory;
    protected $table = 'raspored';

    protected $fillable = ['visible', 'dateCreated', 'title', 'start', 'end'];
}
