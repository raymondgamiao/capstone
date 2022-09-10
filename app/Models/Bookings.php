<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date_start', 'date_end', 'time_start', 'time_end', 'venue', 'client_id'];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
