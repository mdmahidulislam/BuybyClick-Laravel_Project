<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {
        $params=[
            'name'=> $request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            'address'=>$request->address
            ];
        $user=DB::table('users')
            ->insert($params);

        if($user)
        {
            $request->session()->put('user', $user);
            return redirect('/login');
        }
        else
        {
            // $request->session()->flash('message', 'Invalid username or password');
            // $request->session()->forget('message');
            $request->session()->flush();
            return redirect()->back();
        }
    }
}
