<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Session;
use App\http\Requests;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        return view('pages.welcome');
    }

    public function info(){
        
        return view('pages.info');
    }

    public function logout(){
        Session::put('user_name', false);
        return view('.pages.welcome');
    }
}
