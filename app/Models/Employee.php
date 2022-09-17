<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'role',
        'branch_id',
        'contact',
        'email',
        'pfp',
        'twitter',
        'insta',
        'fb',
        'sss',
        'philhealth',
        'pagibig',
        'address',
        'bankacct'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function bookingemployees()
    {
        return $this->hasMany(BookingEmployees::class);
    }
}
