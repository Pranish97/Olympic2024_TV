<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;

class Link extends Model
{
    use HasFactory;

    protected $table = 'link';
    protected $fillable = ['title', 'link', 'video_id', 'game', 'country_id', 'live'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
