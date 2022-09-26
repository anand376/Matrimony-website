<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\partnerInfo;
use Carbon\Carbon;

class dashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        
       $user = User::select('users.*')->where(['id' => session('user')->id])->first();
      
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where('id','!=',session('user')->id)
        ->get();

    

        $all = User::select('users.*')->where('id','!=',session('user')->id)->get();

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
    }

    public function sort_by_male()
    {

        $user = User::select('users.*')->where(['id' => session('user')->id])->first();
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where(['gender' => 'male'])
        ->where('id','!=',session('user')->id)
        ->get();

        $all = User::select('users.*')
        ->where(['gender' => 'male'])
        ->where('id','!=',session('user')->id)
        ->get();

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
        
    }

    public function sort_by_female()
    {

        $user = User::select('users.*')->where(['id' => session('user')->id])->first();
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where(['gender' => 'female'])
        ->where('id','!=',session('user')->id)
        ->get();

        $all = User::select('users.*')
        ->where(['gender' => 'female'])
        ->where('id','!=',session('user')->id)
        ->get();

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
        
    }

    public function sort_by_nuclear()
    {

        $user = User::select('users.*')->where(['id' => session('user')->id])->first();
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where(['family_type' => 'Nuclear'])
        ->where('id','!=',session('user')->id)
        ->get();

        $all = User::select('users.*')
        ->where(['family_type' => 'Nuclear'])
        ->where('id','!=',session('user')->id)
        ->get();

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
        
    }

    public function sort_by_joint()
    {

        $user = User::select('users.*')->where(['id' => session('user')->id])->first();
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where(['family_type' => 'Joint'])
        ->where('id','!=',session('user')->id)
        ->get();

        $all = User::select('users.*')
        ->where(['family_type' => 'Joint'])
        ->where('id','!=',session('user')->id)
        ->get();

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
        
    }

    public function sort_by_yes()
    {

        $user = User::select('users.*')->where(['id' => session('user')->id])->first();
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where(['manglik' => 'yes'])
        ->where('id','!=',session('user')->id)
        ->get();

        $all = User::select('users.*')
        ->where(['manglik' => 'yes'])
        ->where('id','!=',session('user')->id)
        ->get();

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
        
    }

    public function sort_by_no()
    {

        $user = User::select('users.*')->where(['id' => session('user')->id])->first();
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where(['manglik' => 'no'])
        ->where('id','!=',session('user')->id)
        ->get();

        $all = User::select('users.*')
        ->where(['manglik' => 'no'])
        ->where('id','!=',session('user')->id)
        ->get();

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
        
    }

    public function income_range(Request $request)
    {
        return $request->all();

        $user = User::select('users.*')->where(['manglik' => 'no'])->where(['id' => session('user')->id])->first();
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where('id','!=',session('user')->id)
        ->get();

        $all = User::select('users.*')
        ->where(['manglik' => 'no'])
        ->where('id','!=',session('user')->id)
        ->get();

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
        
    }

    public function age(Request $request)
    {
        $min=$request->minAge;
        $max=$request->maxAge;

        // prepare dates for comparison
        $minDate = Carbon::today()->subYears($max); 
        $maxDate = Carbon::today()->subYears($min)->endOfDay();


        $user = User::select('users.*')->where(['id' => session('user')->id])->first();
        $expIn = $user->expected_income;
        $expe = explode("-",$expIn);
        $data = User::select('users.*')
        ->where('id','!=',session('user')->id)
        ->whereBetween('date_of_birth', [$minDate, $maxDate])->get();
      

        $all = User::select('users.*')
        ->where('id','!=',session('user')->id)
        ->whereBetween('date_of_birth', [$minDate, $maxDate])->get();
    

        

        return view('dashboard',['items' => $data , 'data' => $user,'allData' => $all]);
        
    }

   
}
