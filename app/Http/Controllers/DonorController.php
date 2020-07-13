<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Donor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class DonorController extends Controller
{

    public function index()
    {
        return view('login');
    }  

    public function Donorregistration()
    {
        return view('donor_registration');
    }
    
    public function postDonorLogin(Request $request)
    {
        request()->validate([
          'email' => 'required',
          'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('camp_registration');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postDonorRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required|numeric',
        'bloodgroup' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
        
        $data = $request->all();

        $check = $this->Donorcreate($data);
      
        return Redirect::to("/hosp_Campaign")->withSuccess('Great! You have Successfully loggedin');
    }
    
    public function Donordashboard()
    {

      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

	public function Donorcreate(array $data)
	{
	  return Donor::create([
      'name' => $data['name'],
      'address' => $data['address'],
      'phone' => $data['phone'],
      'bloodgroup' => $data['bloodgroup'],
	  'email' => $data['email'],
	  'password' => Hash::make($data['password'])
	  ]);
	}
	
	public function Donorlogout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
