<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cources;

class HomeController extends Controller
{
    public function index(){
        $core = Cources::all();
        return view('admin/auth/dashboard/home',compact('core'));
    }
}
