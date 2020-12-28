<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Donor;
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
            return redirect()->intended('/donor_Campaign');
        }
        flash('Oppes! You have entered invalid credentials');
        return Redirect::to("donor_login");
    }

    public function postDonorRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required|numeric',
        'bloodgroup' => 'required',
        'bloodRh' => 'required',
        'email' => 'required|email|unique:donors',
        'password' => 'required|min:6',
        ]);
        
        $data = $request->all();

        $check = $this->Donorcreate($data);
          
        flash('Great! You have Successfully logged in');
        return Redirect::to("/donor_Donation");
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
      'bloodRh' => $data['bloodRh'],
	    'email' => $data['email'],
	    'password' => Hash::make($data['password'])
	  ]);
	}
	
	public function Donorlogout() {
        Session::flush();
        Auth::logout();
        return Redirect('/home');
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
          
      $donor_user_id = Auth::guard('donor')->user()->id;
      $donor_name = Auth::guard('donor')->user()->name;
      $donor_phone = Auth::guard('donor')->user()->phone;
      $donor_bloodgroup = Auth::guard('donor')->user()->bloodgroup;
      $donor_bloodRh = Auth::guard('donor')->user()->bloodRh;
      
      // && ($camp_query->camp_id === $camp_id)
      //$camp_querys = DB::select('select * from camp_donor_register');
      // $result_camp = new CampDonorRegister();
      $result_camp = CampDonorRegister::select('donor_id','camp_id');

      $test_data1 = CampDonorRegister::get('donor_id','camp_id');

      
      //$test_data2 = CampDonorRegister::get('camp_id');
      $result_camp_data = $result_camp->where([
        'donor_id' => $donor_user_id,
        'camp_id' => $camp_id
      ])->get();

     //$result_donor_id = {{ $result_camp_data -> donor_id }}; 

    //  foreach($result_camp_data as $test)
    //  {
    //     {{$test[0] -> donor_id;}};
    //  } 

    if($result_camp_data->isEmpty()){
      $test='enter data';
      $cdr = new CampDonorRegister();
          $cdr->camp_id = $camp_id;
          $cdr->camp_name = $camp_name;
          $cdr->camp_place = $camp_place;
          $cdr->camp_date =  $camp_date;
          $cdr->camp_time =  $camp_time;
          $cdr->donor_id = $donor_user_id;
          $cdr->donor_name = $donor_name;
          $cdr->donor_phone = $donor_phone;
          $cdr->donor_bloodgroup = $donor_bloodgroup;
          $cdr->donor_bloodRh = $donor_bloodRh;
          $cdr->save();
    }elseif(!is_null($result_camp_data)){
      $test='dnt enter data';
    }  
         
      // return Response::json(array($result_camp_data, $test));
      flash('Successfully Registered');
      return redirect()->intended('/donor_Campaign');
     
     
  }

}
