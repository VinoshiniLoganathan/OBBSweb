<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Hospital;
Use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class HospitalController extends Controller
{
    public function Hospregistration()
    {
        return view('hosp_registration');
    }
    
    public function postHospLogin(Request $request)
    {
        request()->validate([
          'email' => 'required',
          'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (auth('hospital')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('blood_count');
        }
        flash('Oppes! You have entered invalid credentials');
        return Redirect::to("hosp_login");
    }

    public function postHospRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'staffID' => 'required',
        'phone' => 'required|numeric',
        'hospName' => 'required',
        'email' => 'required|email|unique:hospitals',
        'password' => 'required|min:6',
        ]);
        
        $data = $request->all();

        $check = $this->Hospcreate($data);
      
        flash('Great! You have Successfully loggedin');
        return Redirect::to("hosp_login");
    }
    
    public function Hospdashboard()
    {

      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

	public function Hospcreate(array $data)
	{
	  return Hospital::create([
      'name' => $data['name'],
      'staffID' => $data['staffID'],
      'phone' => $data['phone'],
      'hospName' => $data['hospName'],
      'email' => $data['email'],
      'password' => Hash::make($data['password'])
	  ]);
  }
  
  public function hosp_profile()
  {
      $hosp_id = Auth::guard('hospital')->user()->id;

      $view = DB::table('hospitals')
          ->select('*')
          ->where('id', '=', $hosp_id)
          ->get();

      return response()
        ->view('Hospital/hosp_Profile', ['view'=> $view]);
  }

  public function hosp_update($id)
  {
    $upd = DB::select('select * from hospitals where id = ?',[$id]);
    return response()
        ->view('Hospital/hosp_ProfileUpd', ['upd'=> $upd]);
  }

  public function hosp_newprof(Request $request, $id)
  {
    $user = Auth::guard('hospital')->user();
    
    $user->name = $request->name;
    $user->phone = $request->phone;

    if ( !empty($request->password) )
    {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return Redirect::to('hosp_profile');
  }
	
	public function Hosplogout() {
        Session::flush();
        Auth::logout();
        return Redirect('/home');
    }
}
