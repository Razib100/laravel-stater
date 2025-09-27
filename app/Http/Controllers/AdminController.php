<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Language;
use DB;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    
}
