<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Model\Donor;
Use DB;
Use App\Campaign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class DonorController extends Controller
{

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
        if (auth('donor')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/donor_Donation');
        }
        return Redirect::to("donor_login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postDonorRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required|numeric',
        'bloodgroup' => 'required',
        'email' => 'required|email|unique:donors',
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
        return Redirect('donor_login');
    }

    //campaign process
    public function donor_camp_records()
    {
        $campaigns = DB::select('select * from campaigns');
        return view('Donor/donor_Campaign',['campaigns'=>$campaigns]);
        //return view('login');
    }  

    public function donor_camp_register($id) {
      $camp = DB::select('select * from campaigns where id = ?',[$id]);
      return response()
          ->view('Donor/donor_CampRegistration', ['camp'=> $camp]); 
  }

  public function register_camp(Request $request,$id) {
          // $camp = new Campaign;
          // $camp = Campaign::find($id);
          // $camp->place =  $request->place;
          // $camp->date =  $request->date;
          // $camp->time =  $request->time;
          
          $camp->save();
          //return view('index-2');
          return redirect()->intended('/hosp_Campaign');
      //}
  }
}
