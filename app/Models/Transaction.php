<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{

    use HasFactory;

    protected $fillable = [
        'employee_name',
        'sender_name',
        'receiver_name',
        'sender_account',
        'receiver_account',
        'amount',
    ];
}
