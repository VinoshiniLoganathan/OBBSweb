<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Validator,Redirect,Response;
Use App\User;
Use App\Campaign;
Use App\Donor;
Use App\Benefits;
Use App\CampDonorRegister;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    //login and registration process
    public function registration()
    {
        return view('registration');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/hosp_Campaign');
            //return view('index');
            //return Redirect::to("index")->withSuccess('Great! You have Successfully loggedin');
        }   
        
      return Redirect::to("")->withSuccess('Oppes! You have entered invalid credentials');
       
    }
 
    public function postRegistration(Request $request)
    {  
            request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            ]);
            
            $data = $request->all();
    
            $check = $this->create($data);
       
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();

        return Redirect::to("/hosp_Campaign");
        //return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard()
    {
 
      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/home');
    }

    //campaign process
    public function view_records()
    {
        $campaigns = DB::select('select * from campaigns');
        return view('Hospital/hosp_CampRecords',['campaigns'=>$campaigns]);
        //return view('login');
    }  

    //camp edit 
    public function camp_update($id) {
        $camp = DB::select('select * from campaigns where id = ?',[$id]);
        //return view('camp_update',['camp'=>$camp]);
        
        //return redirect()->route('camp_update', ['camp' => $camp]);
        return response()
            ->view('Hospital/hosp_CampEdit', ['camp'=> $camp]); 
    }

    public function edit_camp(Request $request,$id) {
        // $place = $request->input('place');
        // $date = $request->input('date');
        // $time = $request->input('time');
        // //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        // //DB::table('student')->update($data);
        // // DB::table('student')->whereIn('id', $id)->update($request->all());
        // DB::update('update campaigns set place = ?, date=?, time=?, where id = ?',[$place,$date,$time,$id]);
        // echo "Record updated successfully.
        // ";
        // echo 'Click Here to go back.';

        // if (campaigns::where('id', $id)->exists()) {
            //$camp = campaigns::find($id);
            $camp = new Campaign;
            $camp = Campaign::find($id);
    
            $camp->camp_name = $request->camp_name;
            $camp->place =  $request->place;
            $camp->date =  $request->date;
            $camp->time =  $request->time;
            $camp->save();
            //return view('index-2');
            return redirect()->intended('view-records');
        //}
    }

    public function postCampRegistration(Request $request)
    {  
       
        $campaign = new Campaign;
        $campaign->camp_name = $request->camp_name;
        $campaign->place = $request->place;
        $campaign->date = $request->date;
        $campaign->time = $request->time;
        $campaign->save();

        return Redirect::to("/hosp_Campaign");
        //return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function camp_register_detail($id) {
        // $camp = DB::select('select id from campaigns where id = ?',[$id]);
        $camp = Campaign::find($id);
        $camp_id = $camp->id;
        $camp_register = CampDonorRegister::select('*');

        $camp_detail = $camp_register->where([
            'camp_id' => $camp_id
        ])->get();
        
        if(isset($camp_detail[0])){
        //return redirect()->route('camp_update', ['camp' => $camp]);
            return response()
                ->view('Hospital/hosp_CampRegisteredRecords', ['camp_detail'=> $camp_detail]); 
        }
        flash("No Records!");
        return redirect()->intended('view-records');
    }


    public function camp_register_complete($donor_id) {
        $cdr = DB::select('select * from camp_donor_register where donor_id = ?',[$donor_id]);
        //return view('camp_update',['camp'=>$camp]);
        // return Response::json($cdr);
        //return redirect()->route('camp_update', ['camp' => $camp]);
        return response()
            ->view('Hospital/hosp_CampRegisteredComplete', ['cdr'=> $cdr]); 
    }

    public function camp_register_complete_detail(Request $request, $id) {
        // $camp = DB::select('select id from campaigns where id = ?',[$id]);
        $cdr = CampDonorRegister::find($id);
        $cdr->camp_id = $request->camp_id;
        $cdr->camp_place = $request->camp_place;
        $cdr->camp_date =  $request->camp_date;
        $cdr->donor_id = $request->donor_id;
        $cdr->donor_bloodgroup = $request->donor_bloodgroup;
        $cdr->donor_bloodRh = $request->donor_bloodRh;

        // $bb = new BloodBag();
        // $bb->bbag_id = $request->bbag_id;
        // $bb->donor_id = $donor_id;
        // $bb->donor_bloodgroup = $donor_bloodgroup;
        // $bb->donor_bloodRh = $donor_bloodRh;
        // $bb->bbag_volume = $request->bbag_vol;
        // $bb->bbag_component = $request->bbag_comp;
        // $bb->received_date = $camp_date;
        // $bb->expiry_date = $request->expiry_date;
        // $bb->camp_id = $camp_id;
        // $bb->hosp_name = $camp_place;
        // $bb->save();
        
    }


    //donor list process
    public function view_donor_records()
    {
        $donors = DB::select('select * from donors');
        return view('Hospital/hosp_DonorsRecords',['donors'=>$donors]);
        //return view('login');
    } 

    public function donor_update($id) {
        $donor = DB::select('select * from donors where id = ?',[$id]);
        //return view('camp_update',['camp'=>$camp]);
        
        //return redirect()->route('camp_update', ['camp' => $camp]);
        return response()
            ->view('Hospital/hosp_DonorsEdit', ['donor'=> $donor]); 
    }

    public function edit_donor(Request $request,$id) {
            $donor = new Donor;
            $donor = Donor::find($id);
    
            $donor->name =  $request->name;
            $donor->address =  $request->address;
            $donor->phone =  $request->phone;
            $donor->bloodgroup =  $request->bloodgroup;
            $donor->bloodRh =  $request->bloodRh;
            $donor->save();
            //return view('index-2');
            return redirect()->intended('view-donor-records');
        //}
    }

    public function postDonorsRegistration(Request $request)
    {  
       
        $donors = new Donor;
        $donors->name =  $request->name;
        $donors->address =  $request->address;
        $donors->phone =  $request->phone;
        $donors->bloodgroup =  $request->bloodgroup;
        $donors->bloodRh =  $request->bloodRh;
        $donors->email =  $request->email;
        $donors->password = Hash::make($request->password);
        $donors->save();

        return Redirect::to("/hosp_Donors");
        //return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    //benefits process
    public function view_benefit_records()
    {
        $benefits = DB::select('select * from benefits');
        return view('Hospital/hosp_BenefitRecords',['benefits'=>$benefits]);
    }  

    public function benefit_update($id) {
        $benefit = DB::select('select * from benefits where id = ?',[$id]);
        return response()
            ->view('Hospital/hosp_BenefitEdit', ['benefit'=> $benefit]); 
    }

    public function edit_benefit(Request $request,$id) {
            $benefit = new Benefits;
            $benefit = Benefits::find($id);
    
            $benefit->frequency =  $request->frequency;
            $benefit->description =  $request->description;
            $benefit->save();
            return redirect()->intended('view-benefit-records');
    }

    public function postBenefitRegistration(Request $request)
    {  
        $benefits = new Benefits;
        $benefits->frequency = $request->frequency;
        $benefits->description = $request->description;
        $benefits->save();

        return Redirect::to("/hosp_Benefit");
    }

     
   
}
