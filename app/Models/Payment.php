<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['payment_name', 'payment_icon', 'payment_tax', 'created_at', 'updated_at'];  
}
