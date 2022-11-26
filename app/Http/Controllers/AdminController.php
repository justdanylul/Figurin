<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Session;
use App\http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }
    public function show_dashboard()
    {
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        $result2 = DB::table('users')->where('email', $admin_email)->where('password', $admin_password)->first();
        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        }
        if ($result2) {
            Session::put('user_name', $result2->name);
            Session::put('user_id', $result2->id);
            Session::put('user_gmail', $result2->email);
            Session::put('user_address', $result2->address);
            return Redirect::to('/trang-chu');
        }
        if ($result == false || $result2 == false) {
            Session::put('message', 'Mật khẩu hoặc tài khoản bị sai. Vui lòng thử lại');
            return Redirect::to('/admin');
        }
    }
    public function log_out()
    {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
}
