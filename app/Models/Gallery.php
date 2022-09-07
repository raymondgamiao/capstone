<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'Gallery';

    protected $fillable = ['album_name', 'album_cover', 'album_url', 'album_date'];
    use HasFactory;
}
