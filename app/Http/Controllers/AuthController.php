<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Validator,Redirect,Response;
Use App\User;
Use App\Campaign;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    //
    public function index()
    {
        $campaigns = DB::select('select * from campaigns');
        return view('edit',['campaigns'=>$campaigns]);
        //return view('login');
    }  

    //camp edit 
    public function show($id) {
        $camp = DB::select('select * from campaigns where id = ?',[$id]);
        //return view('camp_update',['camp'=>$camp]);
        
        //return redirect()->route('camp_update', ['camp' => $camp]);
        return response()
            ->view('camp_update', ['camp'=> $camp]); 
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
    
            $camp->place =  $request->place;
            $camp->date =  $request->date;
            $camp->time =  $request->time;
            $camp->save();
            //return view('index-2');
            return redirect()->intended('camp_registration');
        //}
    }
 
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
            return redirect()->intended('index-2');
            //return Redirect::to("index-2");
        }
        return Redirect::to("camp_registration");
    }
 
    public function postRegistration(Request $request)
    {  
        // request()->validate([
        // 'name' => 'required',
        // 'email' => 'required|email|unique:users',
        // 'password' => 'required|min:6',
        // ]);
         
        // $data = $request->all();
 
        // $check = $this->create($data);
       
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return Redirect::to("index-2");
        //return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }


    public function postCampRegistration(Request $request)
    {  
       
        $campaign = new Campaign;
        $campaign->place = $request->place;
        $campaign->date = $request->date;
        $campaign->time = $request->time;
        $campaign->save();

        return Redirect::to("index-2");
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
        return Redirect('login');
    }
}
