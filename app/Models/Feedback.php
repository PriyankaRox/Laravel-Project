<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $primaryKey = 'fid';
    protected $fillable = [
        'cid',
        'title',
        'type',
        'description',
        'comment',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'cid', 'id');
             // this belongs to model,     'foreignkey', 'ownerkey'
    }


}
