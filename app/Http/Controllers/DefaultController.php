<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Validator;

class DefaultController extends Controller
{
    public function index(){
    	return view('studio\landing');
    }
    
    public function login(){
    	return view('studio\users\login');
    }

    //verify email and password login
    public function postlogin(){
        try{

            $requests=request()->all();
            
            $rules = [
                'user_email' => 'required|email',
                'user_password' => 'required',
            ];

            $validation = Validator::make($requests, $rules);

            $user_email = $requests["user_email"];
            $user_password = $requests["user_password"];

            $validation->after(function($validation) use($user_email){
                
            }); 
            
            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            $user = DB::table('user')
                    ->join('studio','user.user_studio_id','=','studio.studio_id')
                    ->select('user_id','user_email','user_password','user_full_name','user_studio_id','user_photo','studio_logo')
                    ->where('user_email',$user_email)->first();
            if(is_null($user)){
                return response()->json(['status' => 'error', 'message'=>'address email not found']);
            }
            else if(!is_null($user) && Hash::check($user_password,$user->user_password)){
                session()->put('user_email', $user_email);
                session()->put('user_id', $user->user_id);
                session()->put('user_full_name', $user->user_full_name);
                session()->put('user_studio_id', $user->user_studio_id);
                session()->put('user_photo', $user->user_photo);
                session()->put('studio_logo', $user->studio_logo);
                return response()->json(['status' => 'success','message' => 'correct']);
            }
            else{
                return response()->json(['status' => 'error', 'message'=>'password not correct']);
            }
        }
        catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    //logout
    public function logout(){
        
        session()->forget('user_email');
        session()->forget('user_id');
        session()->forget('user_full_name');
        session()->forget('user_studio_id');
        session()->forget('user_photo');
        session()->forget('studio_logo');
        
        return redirect('login');
    }

    // it returns the view where to change your password
    public function setuppassword($user_code){
        return view('studio\users\setup_pw')->with('user_code',$user_code);
    }

    public function setpassword(){
        try{

            $requests=request()->all();
            
            $rules = [
                'password1' => 'required',
                'password2' => 'required',
            ];

            $validation = Validator::make($requests, $rules);

            $password1 = $requests["password1"];
            $password2 = $requests["password2"];

            /*$validation->after(function($validation) use($user_email){
                
            });*/ 
            
            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            //check if they're the same
            if($password1 == $password2){
               //update password where user_code=user_code
                DB::table('user')->where('user_code',$requests['user_code'])
                                        ->update(['user_password'=>Hash::make($password1)/*,'user_code'=>null*/]);

                return response()->json(['status' => 'success','message' =>'password updated successfully']); 
            }
            else{
                return response()->json(['status' => 'error','message' =>'passwords are not the same']);
            }
        }
        catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }
}
