<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Validator,Redirect,Response;
Use App\User;
Use App\Campaign;
Use App\Donor;
Use App\Benefits;
Use App\CampDonorRegister;
use App\BloodBag;
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

    //blood bag process
    public function blood_bag(Request $request) {
        $id = $request->input('id');

        $cdr = DB::select('select * from donors where id = ?',[$id]);

        return response()
            ->view('Hospital/hosp_BloodBagForm', ['cdr'=> $cdr]); 
    }

    public function blood_bag_detail(Request $request) {
        
        request()->validate([
            'bbag_id' => 'required|unique:blood_bag',
        ]);

        $camp_id = $request->camp_id;

        $bb = new BloodBag();
        $bb->bbag_id = $request->bbag_id;
        $bb->donor_id = $request->donor_id;
        $bb->donor_name = $request->donor_name;
        $bb->donor_bloodgroup = $request->donor_bloodgroup;
        $bb->donor_bloodRh = $request->donor_bloodRh;
        $bb->bbag_vol = $request->bbag_vol;
        $bb->bbag_comp = $request->bbag_comp;
        $bb->received_date = $request->camp_date;
        $bb->expiry_date = $request->expiry_date;
        $bb->camp_id = $camp_id;
        $bb->hosp_name = $request->hosp_name;
        $bb->save();

        return redirect()->intended('blood_count');       
        
    }

    public function blood_count()
    {
        $totals = DB::table('blood_bag')
            ->where('bbag_status', '0')
            ->where('expiry_date', '>', date('Y-m-d'))
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when donor_bloodGroup = 'A' && donor_bloodRh = 'Positive' then 1 end) as AP")
            ->selectRaw("count(case when donor_bloodGroup = 'A' && donor_bloodRh = 'Negative' then 1 end) as ANe")
            ->selectRaw("count(case when donor_bloodGroup = 'B' && donor_bloodRh = 'Positive' then 1 end) as BP")
            ->selectRaw("count(case when donor_bloodGroup = 'B' && donor_bloodRh = 'Negative' then 1 end) as BNe")
            ->selectRaw("count(case when donor_bloodGroup = 'AB' && donor_bloodRh = 'Positive' then 1 end) as ABP")
            ->selectRaw("count(case when donor_bloodGroup = 'AB' && donor_bloodRh = 'Negative' then 1 end) as ABNe")
            ->selectRaw("count(case when donor_bloodGroup = 'O' && donor_bloodRh = 'Positive' then 1 end) as OP")
            ->selectRaw("count(case when donor_bloodGroup = 'O' && donor_bloodRh = 'Negative' then 1 end) as ONe")
            ->first();

            return response()
                ->view('Hospital/hosp_BloodBag',['totals'=>$totals]);
    }

    public function blood_count_detail(Request $request)
    {
        $bgrp = $request->input('bgrp');
        $brh = $request->input('brh');
        
        $bbd = DB::table('blood_bag')
            ->select('*')
            ->where('bbag_status', '0')
            ->where('expiry_date', '>', date('Y-m-d'))
            ->where('donor_bloodgroup', $bgrp)
            ->where('donor_bloodRh', $brh)
            ->get();
        
        return response()
            ->view('Hospital/hosp_BloodBagRecords', ['bbd'=> $bbd]);

    }

    public function blood_bag_status($id)
    {
        DB::table('blood_bag')
            ->where('bbag_id', $id)
            ->update(['bbag_status' => 1]);

        return redirect()->intended('blood_count');

    }


    //campaign process
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
            $camp->hosp_name = $request->hosp_name;
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
        $camp->hosp_name = $request->hosp_name;
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


    public function camp_register_complete($id) {
        $cdr = DB::select('select * from camp_donor_register where donor_id = ?',[$id]);
        //return view('camp_update',['camp'=>$camp]);
        // return Response::json($test);
        //return redirect()->route('camp_update', ['camp' => $camp]);
        return response()
            ->view('Hospital/hosp_CampRegisteredComplete', ['cdr'=> $cdr]); 
    }

    public function camp_register_complete_detail(Request $request) {
        
        request()->validate([
            'bbag_id' => 'required|unique:blood_bag',
        ]);

        $camp_id = $request->camp_id;

        $bb = new BloodBag();
        $bb->bbag_id = $request->bbag_id;
        $bb->donor_id = $request->donor_id;
        $bb->donor_name = $request->donor_name;
        $bb->donor_bloodgroup = $request->donor_bloodgroup;
        $bb->donor_bloodRh = $request->donor_bloodRh;
        $bb->bbag_vol = $request->bbag_vol;
        $bb->bbag_comp = $request->bbag_comp;
        $bb->received_date = $request->camp_date;
        $bb->expiry_date = $request->expiry_date;
        $bb->camp_id = $camp_id;
        $bb->hosp_name = $request->hosp_name;
        $bb->save();

        return redirect()->intended('camp_register_detail/'.$camp_id);
        // return response()
        //         ->view('Hospital/hosp_CampRegisteredRecords', ['camp_detail'=> $camp_detail]);       
        
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
