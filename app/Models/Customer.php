<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'dob',
        'gender',
        'email',
        'mobile',
        'address',
        'city',
        'pin',
        'state',
        'country',
        'adhar_number',
        'religion',
        'caste',
        'category',
        'emergency_contacts',
    ];

    public function location()
    {
        return $this->hasMany(Location::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
   
}
