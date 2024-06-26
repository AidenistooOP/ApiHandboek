<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoofdstuk extends Model
{
    use HasFactory;

    protected $table = 'hoofdstukken';
    protected $fillable = ["id", "naam"];

}
