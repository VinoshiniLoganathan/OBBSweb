<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Model\Donor;
Use DB;
Use App\Campaign;
Use App\CampDonorRegister;
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
      $camp = Campaign::find($id);
      $camp_id = $camp->id;
      $camp_name = $camp->camp_name;
      $camp_place = $camp->place;
      $camp_date =  $camp->date;
      $camp_time =  $camp->time;
          
      $donor_id = Auth::guard('donor')->user()->id;
      $donor_name = Auth::guard('donor')->user()->name;
      $donor_phone = Auth::guard('donor')->user()->phone;
      $donor_bloodgroup = Auth::guard('donor')->user()->bloodgroup;
      
      $cdr = new CampDonorRegister();
      $cdr->camp_id = $camp_id;
      $cdr->camp_name = $camp_name;
      $cdr->camp_place = $camp_place;
      $cdr->camp_date =  $camp_date;
      $cdr->camp_time =  $camp_time;
      $cdr->donor_id = $donor_id;
      $cdr->donor_name = $donor_name;
      $cdr->donor_phone = $donor_phone;
      $cdr->donor_bloodgroup = $donor_bloodgroup;
      if(!$donor_id){
      $cdr->save();
      }
      return redirect()->intended('/donor_Campaign');
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
