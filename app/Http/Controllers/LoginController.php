<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login.index');
    }

    public function verify(LoginRequest $request)
    {
        //$sql = "SELECT * FROM users WHERE username='$request->username' AND password='$request->password'";
        //$result = DB::select($sql);

        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password', $request->password)
            ->value('username');

        if($user)
    	{
            $request->session()->put('user', $user);
    		$request->session()->put('role', "user");
    		// session('user', $user);
            return redirect('/home');
    	}
    	else
    	{
            $request->session()->flash('message', 'Invalid username or password');
            //$request->session()->forget('message');
            //$request->session()->flush();
            return redirect()->back();
    	}
    }
}
