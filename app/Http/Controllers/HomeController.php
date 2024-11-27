<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AplController;

class HomeController extends Controller
{
    public function home(){
      
        return view("home");
    }
}
