<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingEmployees extends Model
{
    protected $table = 'booking_employees';

    use HasFactory;
    protected $fillable = ['employee_id', 'booking_id'];

    public function booking()
    {
        return $this->belongsTo(Bookings::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
