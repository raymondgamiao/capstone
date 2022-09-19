<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable = ['name', 'log_id', 'log_type'];
}
