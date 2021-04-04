<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'cid',
        'name',
        'street',
        'address',
        'city',
        'pin',
        'contact_person',
        'mobile',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'cid', 'id');
        //      this belongs to model,     'foreignkey', 'ownerkey'
    }
}
