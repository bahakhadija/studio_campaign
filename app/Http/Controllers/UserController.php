<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CreateUser;
use App\Mail\CreateStudio;
use DateTime;
use Validator;
use DB;

class UserController extends Controller
{
    // Users
    
    public function allusers(){
        return DB::table("user")->join('role','user.user_role_id','=','role.role_id')
                                ->where('user_studio_id',session()->get('user_studio_id'))
                                ->where('user_deleted', 0)
                                ->orderBy('user_date_added','desc')->get();
    }

    public function users(){

        $users= $this->allusers();

        $roles= DB::table("role")
                    ->where(function($q){
                        $q->whereNull('role_studio_id');
                        $q->orWhere('role_studio_id',session()->get('user_studio_id'));
                    })
                    ->where('role_deleted',0)
                    ->get(); 

        return view('studio\users\users',['users'=>$users, 'roles'=>$roles]);
    }

    public function saveuser(){

        try{
            $requests=request()->all();
            $rules = [
                'user_full_name' => 'required',
                'user_email' => 'required|email',
                'user_phone' => 'required',
                'user_position' => 'required',
                'user_location' => 'required',
            ];

            if(request()->hasfile('user_photo')){
                $rules += ['user_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
            }

            $validation = Validator::make($requests, $rules);

            $user_full_name=$requests['user_full_name'];
            $user_email=$requests['user_email'];
            $user_phone=$requests['user_phone'];
            $user_position=$requests['user_position'];
            $user_location=$requests['user_location'];
            $user_role_id=$requests['user_role_id'];

            $validation->after(function($validation) use($user_email){
                $email_exist=DB::table('user')
                            ->where('user_email',$user_email)->first();
                if(!is_null($email_exist)){
                    $validation->errors()->add('email', 'This email already exist');
                }
            });

            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            $user_code=str_random(20);
            $filename=NULL;

            if(request()->hasfile('user_photo')){
                $photo=request()->file('user_photo');
                $extension=$photo->getClientOriginalExtension();
                $filename=str_random(10) .'.'. $extension;
                $photo->move('uploads/photo/',$filename);
            }

            DB::table('user')->insert([
                    'user_full_name' => $user_full_name,
                    'user_email' => $user_email,
                    'user_phone' => $user_phone,
                    'user_position' => $user_position,
                    'user_location' => $user_location,
                    'user_role_id' => $user_role_id,
                    'user_photo' => $filename,
                    'user_studio_id'=>session()->get('user_studio_id'),
                    'user_type'=>0,
                    'user_password'=>Hash::make(str_random(8)),
                    'user_code' => $user_code,
                    'user_date_added'=>new DateTime()]);

            // send Email with link
            $sent=Mail::to($user_email)->send(new CreateUser($user_code,session()->get('user_email')));
            
            $users= $this->allusers();

            return response()->json(['status' => 'success','message' => 'user added successfully', 'users' => $users]);
        }
        catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function updateuser(){
        try{
            $requests=request()->all();

            $rules=[
                'user_full_name' => 'required',
                'user_phone' => 'required',
                'user_position' => 'required',
                'user_location' => 'required',
            ];

            if(request()->hasfile('user_photo')){
                $rules += ['user_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
            }

            $validation = Validator::make($requests, $rules);

            /*$validation->after(function($validation) use($requests){

            });*/

            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            $user_id=$requests['user_id'];
            $user_full_name=$requests['user_full_name'];
            $user_phone=$requests['user_phone'];
            $user_position=$requests['user_position'];
            $user_location=$requests['user_location'];
            $user_photo=$requests['user_photo'];
            $user_role_id=$requests['user_role_id'];

            $user = DB::table('user')->where('user_id', $user_id)->first();

            if (is_null($user)) {
                return response()->json(['no'=>'user does not exist']);
            }

            $filename = $user->user_photo;
            if(request()->hasfile('user_photo')){
                $photo = request()->file('user_photo');
                $extension=$photo->getClientOriginalExtension();
                $filename=tstr_random(10) .'.'. $extension;
                $photo->move('uploads/photo/',$filename);
            }


            DB::table('user')
                ->where('user_id', $user_id)
                ->update([
                    'user_full_name' => $user_full_name,
                    'user_phone' => $user_phone,
                    'user_location' => $user_location,
                    'user_position' => $user_position,
                    'user_photo' => $filename,
                    'user_role_id' => $user_role_id]);

            if($user_id==session()->get('user_id')){
                session()->put('user_full_name', $user_full_name);
                session()->put('user_photo', $filename);
            }

            $users= $this->allusers();
            return response()->json(['status' => 'success', 'message' => 'user updated with success', 'users' => $users]);
            
        }catch (\Exception $e) {
            \Log::error($e);
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function deleteuser(){
        try 
        {
            $requests = request()->all();
            
            $user_id = $requests['user_id'];

            DB::table('user')
                    ->where('user_id', $user_id)
                    ->update(['user_deleted' => 1]);

            $users= $this->allusers();

            return response()->json(['status' => 'success','message' => 'user deleted successfully', 'users'=> $users]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function showuser(){
        try 
        {
            $user = DB::table('user')->join('role','user.user_role_id','=','role.role_id')
                                    ->where('user_id', request()->get('user_id'))
                                    ->first();

            if(is_null($user)){
                return response()->json(['status' => 'warning', 'message'=> 'this user already deleted']);
            }

            return response()->json(['status' => 'success', 'user'=> $user]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

///////////////////////////////////////////////////////////

    //profile d'utilisateur studio
    
    public function profile(){

        $account = \DB::table('user')->where('user_id', session()->get('user_id'))->get();
        return view('studio\users\profile')->with('account',$account);
    }

    public function updateprofile(){
        try{
            $requests=request()->all();

            $rules=[
                'user_full_name' => 'required',
                'user_phone' => 'required',
                'user_position' => 'required',
                'user_location' => 'required',
            ];

            if(request()->hasfile('user_photo')){
                $rules += ['user_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
            }

            $validation = Validator::make($requests, $rules);

            /*$validation->after(function($validation) use($requests){

            });*/

            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            $user_id=session()->get('user_id');

            $user_full_name=$requests['user_full_name'];
            $user_phone=$requests['user_phone'];
            $user_position=$requests['user_position'];
            $user_location=$requests['user_location'];
            $user_photo=$requests['user_photo'];

            $user = \DB::table('user')->where('user_id', $user_id)->first();

            if (is_null($user)) {
                return response()->json(['no'=>'user does not exist']);
            }

            $filename = $user->user_photo;
            if(request()->hasfile('user_photo')){
                $photo = request()->file('user_photo');
                $extension=$photo->getClientOriginalExtension();
                $filename=str_random(10) .'.'. $extension;
                $photo->move('uploads/photo/',$filename);
                session()->put('user_photo', $filename);
            }

            session()->put('user_full_name', $user_full_name);
            DB::table('user')
                ->where('user_id', $user_id)
                ->update([
                    'user_full_name' => $user_full_name,
                    'user_phone' => $user_phone,
                    'user_location' => $user_location,
                    'user_position' => $user_position,
                    'user_photo' => $filename]);
            
            $user = \DB::table('user')->where('user_id', $user_id)->first();
            return response()->json(['status' => 'success', 'message' => 'account updated with success', 'user' => $user]);
            
        }catch (\Exception $e) {
            \Log::error($e);
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function updatepassword(){

        try{
            $requests=request()->all();

            $rules =[
                'current_password' => 'required',
                'password1' => 'required',
                'password2' => 'required',
            ];

            $validation = Validator::make($requests, $rules);

            /*$validation->after(function($validation) use($requests){

            });*/

            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            $user_id=session()->get('user_id');

            $current_password=$requests['current_password'];
            $password1=$requests['password1'];
            $password2=$requests['password2'];

            $user=DB::table('user')->where('user_id', $user_id)->first();
            if (is_null($user)) {
                return response()->json(['status' =>'error', 'message' =>'user does not exist']);
            }

            if(Hash::check($current_password,$user->user_password)){
                //check if they're the same
                if($password1 == $password2){
                   //update password where user_id=user_id
                    \DB::table('user')->where('user_id',$user->user_id)
                                    ->update(['user_password'=>Hash::make($password1)]);
                    return response()->json(['status' => 'success', 'message' => 'password updated with success']); 
                }
                else{
                    return response()->json(['status' =>'error', 'message' =>'passwords are not the same']);
                }
            }
            else{
                return response()->json(['status' =>'error', 'message' =>'the current password is not correct']);
            }
        }catch (\Exception $e) {
            \Log::error($e);
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function deleteprofile(){
    	return '';
	}
}
