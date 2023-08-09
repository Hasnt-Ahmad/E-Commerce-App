<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function auth(Request $request)
    {
        $email=request("email");
        $userName=request("userName");
        $password=request("password");

        if($email==null | $userName=null | $password=null) {
            session(['empty' => 'null']);
            return redirect("/login");
        }

        $data=User::find($email);
        if($data==null) {
            session(['auth' => 'null']);
            return redirect("/login");
        }
        if($data->userName!= request($userName)){
            session(['userName' => 'null']);
            return redirect("/login");
        }
        if($data->password!= request("password")){
            session(['password' => 'null']);
            return redirect("/login");
        }
        session(['userName' => request("userName")]);
        session(['user_id'=> $data->id]);
        return redirect("/");
    }
}
