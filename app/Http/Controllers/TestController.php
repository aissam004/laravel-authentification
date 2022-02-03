<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('foo');
        //$this->middleware('auth')->except(['foo']);
    }
    public function bar(){

        return view('test.bar');
    }
    public function foo(){

        return view('test.foo');
    }
    public function admin(){
        if(!Gate::allows('access-admin')){
            abort(403);
        }
        return view('test.admin');
    }
}
