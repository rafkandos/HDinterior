<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $type = DB::table('type')->get();
        return view('project', ['type' => $type]);
    }

    public function kitchenset()
    {
        return view('project/kitchenset');
    }
}
