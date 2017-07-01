<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use URL;
use DB;
use Validator;
use Yajra\Datatables\Datatables;
use Crypt;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\User;


class LoginController extends Controller
{
    

    public function submitlogin(Request $request){

    	$this->validate($request, ['username' => 'required','password'=>'required']);
        
        $username = $request->input('username');
        $password = $request->input('password');
        $user = User::where('username', $username)->first();

        
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
           return redirect()->intended('list');           
        }else{
            return back()->withErrors(array("login"=>"Username dan Password Salah!"));
        }
    }

    public function login(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect(URL::to('login'));
    }


}
