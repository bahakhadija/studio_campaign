<?php

namespace App\Http\Controllers;
use DateTime;
use App\Mail\CreateStudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;
use Carbon\Carbon;

class StudioController extends Controller
{
    public function studios(){
        return view('settings\settigns');
    }

    public function loadstudio(){
        return '';
    }

    public function savestudio(){
        try{
            // validate inputs
            $requests=request()->all();
            
            $rules = [
                'studio_name' => 'required',
                'studio_website' => 'required',
                'user_full_name' => 'required',
                'user_email' => 'required|email',
                'user_phone' => 'required|numeric',
                'user_position' => 'required',
                'user_location' => 'required',
            ];

            $validation = Validator::make($requests, $rules);

            $studio_name=$requests['studio_name'];
            $studio_website=$requests['studio_website'];
            $user_full_name=$requests['user_full_name'];
            $user_email=$requests['user_email'];
            $user_phone=$requests['user_phone'];
            $user_position=$requests['user_position'];
            $user_location=$requests['user_location'];

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

            $user_code=str_random(20) . time();  

            //insert and verify if inserted
            $id= DB::table('studio')->insertGetId(
                ['studio_name'=>$studio_name,
                'studio_website'=>$studio_website,
                'studio_type'=>0,
                'studio_date_added'=>new DateTime()
                ]);

            DB::table('user')->insert(
                ['user_studio_id'=>$id,
                'user_full_name'=>$user_full_name,
                'user_email'=>$user_email,
                'user_phone'=>$user_phone,
                'user_position'=>$user_position,
                'user_location'=>$user_location,
                'user_type'=>1,
                'user_password'=>Hash::make(str_random(8)),
                'user_code' => $user_code,
                'user_date_added'=>new DateTime()
                ]);

            // send email to user account
            Mail::to($user_email)->send(new CreateStudio($user_code, 'app@email.com'));

            return response()->json(['response' => 'success', 'message'=>'studio added with success']);
        }
        catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function showstudio(){

        $account = \DB::table('user')->where('user_id', session()->get('user_id'))->first();
        $location=$account->user_location;
        $now_timezone_studio=Carbon::now($location)->format('H:i');
        $id_account = $account->user_studio_id ;
        $studio = \DB::table('studio')->where('studio_id', $id_account)->first();
        return view('studio\settings\settings', ['studio' => $studio,'timezone'=>$now_timezone_studio,'location'=>$location ]);
        
   
    }

    public function updatestudio(){

        
         try{
            $requests=request()->all();

            $rules=[
                'studio_id' => 'required',
                'studio_name' => 'required',
                'studio_short_name' => 'required',
                'studio_phone' => 'required|numeric',
                'studio_time_out' => 'required| numeric',
                'studio_email' => 'required|email',
                'studio_website' => 'required',
                'studio_address_line1' => 'required',
                'studio_address_line2' => 'required',
                'studio_state' => 'required',
                'studio_city' => 'required',
                'studio_zip_code' => 'required'
            ];

            if(request()->hasfile('studio_logo')){
                $rules += ['studio_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
            }

            $validation = Validator::make($requests, $rules);

            /*$validation->after(function($validation) use($requests){

            });*/

            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            $studio_id=$requests['studio_id'];
            $studio_name=$requests['studio_name'];
            $studio_short_name=$requests['studio_short_name'];
            $studio_phone=$requests['studio_phone'];
            $studio_time_out=$requests['studio_time_out'];
            $studio_email=$requests['studio_email'];
            $studio_website=$requests['studio_website'];
            $studio_address_line1=$requests['studio_address_line1'];
            $studio_address_line2=$requests['studio_address_line2'];
            $studio_state=$requests['studio_state'];
            $studio_city=$requests['studio_city'];
            $studio_zip_code=$requests['studio_zip_code'];

            

            $studio = \DB::table('studio')->where('studio_id', $studio_id)->first();

            if (is_null($studio)) {
                return response()->json(['no'=>'studio does not exist']);
            }

            $filename = $studio->studio_logo;
            if(request()->hasfile('studio_logo')){
                $photo = request()->file('studio_logo');
                $extension=$photo->getClientOriginalExtension();
                $filename=str_random(10) .'.'. $extension;
                $photo->move('uploads/photo/',$filename);
                
            }

            
            DB::table('studio')
                ->where('studio_id', $studio_id)
                ->update([
                    
                    'studio_name'=>$studio_name,
                    'studio_short_name'=>$studio_short_name,
                    'studio_phone'=>$studio_phone,
                    'studio_time_out'=>$studio_time_out,
                    'studio_email'=>$studio_email,
                    'studio_website'=>$studio_website,
                    'studio_address_line1'=>$studio_address_line1,
                    'studio_address_line2'=>$studio_address_line2,
                    'studio_state'=>$studio_state,
                    'studio_city'=>$studio_city,
                    'studio_zip_code'=>$studio_zip_code,
                    'studio_logo' => $filename]);
            
            $studio = \DB::table('studio')->where('studio_id', $studio_id)->first();
            return response()->json(['status' => 'success', 'message' => 'account updated with success', 'studio' => $studio]);
            
        }catch (\Exception $e) {
            \Log::error($e);
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }


    }

    public function deletestudio(){
        return '';
    }
}
