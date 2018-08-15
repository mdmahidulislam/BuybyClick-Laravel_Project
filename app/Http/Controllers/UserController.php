<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        
    }
    public function userProfile(Request $request)
    {
        $users = DB::table('users')
            ->where('username',$request->session()->get('user'))
            ->get();

        return view('user.userProfile', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->find($id);
        return view('user.edit', ['user' => $user]);
    }
    public function editPassword($id)
    {
        $user = DB::table('users')->find($id);
        return view('user.editPassword', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $params = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address
        ];
        DB::table('users')
            ->where('id', $id)
            ->update($params);

        return redirect('/user/userProfile');
    }
    public function updatePassword(Request $request, $id)
    {
        $params1 = [
            'password'=>$request->newPassword
        ];
        $oldPassword = DB::table('users')
             ->where('id',$id)
             ->value('password');
        if($request->oldPassword == $oldPassword)
        {
            DB::table('users')
            ->where('id', $id)
            ->update($params1);
            return redirect('/user/userProfile');
        }
        else{
            $request->session()->flash('message', 'Incorrect Password');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request)
    {
        //
    }
    public function buyHistory($id)
    {
        $orders = DB::table('orders')
            ->where('customerId',$id)
            ->get();

        return view('user.buyHistory', ['orders' => $orders]);
    }
    public function userOrderDetails($id)
    {
        $soldProducts = DB::table('soldProduct')
            ->where('orderId',$id)
            ->get();

        return view('user.userOrderDetails', ['soldProducts' => $soldProducts]);
    }
}
