<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use App\Mail\TestMarkDownMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('foo');
        //$this->middleware('auth')->except(['foo']);
    }
    public function bar(){
        Mail::to(Auth::user()->email)
                ->send(new testMail(Auth::user()));

        return view('test.bar');
    }
    public function foo(){

        return view('test.foo');
    }
    public function sendMarkDownMail(){
            Mail::to(Auth::user()->email)
                 ->queue(new TestMarkDownMail());

    }
    public function admin(){
        if(!Gate::allows('access-admin')){
            abort(403);
        }
        return view('test.admin');
    }
}
