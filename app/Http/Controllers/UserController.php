<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
       
        $user = User::where(['email'=>$req->email])->first();
        if(Hash::check($req->pass,$user->password)){
            $req->session()->put('user',$user);
            return redirect('/');

        }
        else{
            echo 'not matched';
        }
    }

    function signup(Request $req)
    {
        $u = new User;
        $u->name = $req->uname;
        $u->email = $req->email;
        $u->password = Hash::make($req->pass);
        $u->save();
        return redirect('login');
       

    }
}
