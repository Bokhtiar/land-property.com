<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'phone', 'user_id', 'email', 'location', 'description', 'status', 'payment_name', 'payment_number', 'amount'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
