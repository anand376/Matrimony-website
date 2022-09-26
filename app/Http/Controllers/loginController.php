<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\partnerInfo;
use Illuminate\Support\Facades\DB;


class loginController extends Controller
{
    public function register(Request $request)
    {
        if(session()->has('user')){
        
        $data =  User::find(['users.id' => session::get('user')->id])->first();
         User::where('id','=',$data->id)->update([
            'name'=>session::get('user')->name,
            'email' => session::get('user')->email,
            'password'=>session::get('user')->password,
            'date_of_birth' => $request->dob,
            'gender'=>$request->inlineRadioOptions,
            'annual_income'=>$request->income,
            'occupation'=>$request->occupation,
            'family_type'=>$request->family,
            'manglik'=>$request->manglik
          ]);
          return redirect('/partner');

        }
       // return $request->all();
       if(!session()->has('user')){
        $name = $request->fname." ".$request->lname;
        $data = new User;
        $data->name = $name;
        $data->email = $request->email;
        $data->password = hash::make($request->password);
        $data->date_of_birth = $request->dob;
        $data->gender = $request->inlineRadioOptions;
        $data->annual_income = $request->income;
        $data->occupation = $request->occupation;
        $data->family_type = $request->family;
        $data->manglik = $request->manglik;
        $data->save();
     return redirect('/partner');
       }
    }

    public function partner_info(Request $request)
    {
    //  return $request->all();
     $data = DB::table('users')->latest()->first();
    User::where('id', $data->id)->update(["expected_income" => $request->expectedIncome,"partnerOccupation"=>json_encode($request->occupation),"Family"=>json_encode($request->family),"partnerManglik"=>json_encode($request->manglik)]);
   
      return redirect('/')->withSuccess('Please sign in to enter dashboard');;

    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
         ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->put('user', auth::user());
          
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::forget('user');
        return redirect('/');
    }
}
