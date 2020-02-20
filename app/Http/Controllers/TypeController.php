<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function index(Request $req)
    {
        if ($req->session()->has('logged_in')) {
            if ($req->session()->get('logged_in') != true) {
                return redirect('login');
            } else {
                $type = DB::table('type')->get();
                return view('type/index', ['type' => $type]);
            }
        } else {
            return redirect('login');
        }
    }

    public function addType(Request $req)
    {
        $this->validate($req, [
			'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'tn' => 'required',
        ]);
        
        $file = $req->file('img');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        DB::table('type')->insert([
            'type_name' => $req->tn,
            'image'     => $nama_file    
        ]);
    
        return redirect('type');

    }
}
