<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apl extends Model
{
    use HasFactory;
    protected $fillable = ['apl_name', 'apl_icon', 'created_at', 'updated_at'];  
}
