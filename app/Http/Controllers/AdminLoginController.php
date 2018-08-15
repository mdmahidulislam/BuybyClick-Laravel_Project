<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlogin.index');
    }

    public function verify(LoginRequest $request)
    {
        //$sql = "SELECT * FROM users WHERE username='$request->username' AND password='$request->password'";
        //$result = DB::select($sql);

        $admin = DB::table('admins')
            ->where('username', $request->username)
            ->where('password', $request->password)
            ->value('username');
        if($admin)
        {
            $request->session()->put('admin', $admin);
            $request->session()->put('role', 'admin');
            // session('user', $user);
            return redirect('/admindashboard');
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
