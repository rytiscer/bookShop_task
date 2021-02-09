<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class UserController extends Controller
{
    public function store(Request $request)
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required',
            ]);

            $user=new User([
                'name' => $request->get('firstname'), // $user->firstname=>$request->get('firstname'),
                'email' => $request->get('email'),
                'dob' => $request->get('dob'),
                ]);
                $user->save();
                return redirect('/users')->with('success','user added');
        }
}
