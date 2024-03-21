<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';
    protected $fillable = ['title', 'teamA', 'teamB', 'teamA_image', 'teamB_image', 'stadium', 'league', 'time', 'date'];
}
