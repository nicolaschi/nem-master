<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'cert',
        'reference',
        'status',
        'amount',
        'email',
        
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
