<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';
    protected $fillable = ['name', 'image', 'description', 'total_medal', 'gold_medal', 'silver_medal', 'bronze_medal'];
}
