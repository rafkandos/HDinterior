<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function do_login(Request $req)
    {
        $dtLogin = DB::table('admin')->where('username', $req->username)
                                    ->where('password', $req->password)
                                    ->get();
        
        if ($dtLogin != null) {
            $req->session()->put('logged_in', true);
            return redirect('admins');
        }else{
            return redirect('login');
        }
    }
    
    public function index(Request $req)
    {
        if ($req->session()->has('logged_in')) {
            if ($req->session()->get('logged_in') != true) {
                return redirect('login');
            } else {
                return view('admin/home');
            }
        } else {
            return redirect('login');
        }
    }

    public function logout(Request $req)
    { 
        $req->session()->forget('logged_in');
        return redirect('login');
    }
}
