<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use DateTime;

class RoleController extends Controller
{
    // Roles
    
    public function allroles(){
        return DB::table("role")
    			->where(function($q){
                    $q->whereNull('role_studio_id');
                    $q->orWhere('role_studio_id',session()->get('user_studio_id'));
                })
                ->where('role_deleted',0)
    			->get(); 

                
                    
    }

    public function roles(){

        $roles= $this->allroles();

        return view('studio\users\roles',['roles'=>$roles]);
    }

    public function saverole(){

        try{
            $requests=request()->all();
            $rules = [
                'role_name' => 'required',
                'role_description' => 'required',];

            $validation = Validator::make($requests, $rules);

            $role_name=$requests['role_name'];
            $role_description=$requests['role_description'];

            $validation->after(function($validation) use($requests){
            });

            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            $check = DB::table('role')->insert([
                    'role_name' => $role_name,
                    'role_description' => $role_description,
                    'role_studio_id' => session()->get('user_studio_id'),
                    'role_date_added' => new DateTime()]);

            if($check==false){
                return response()->json(['status' => 'error', 'message'=>'role not added']);
            }

            $roles= $this->allroles();

            return response()->json(['status' => 'success','message' => 'role added successfully', 'roles' => $roles]);
        }
        catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function updaterole(){
        try{
            $requests=request()->all();

            $rules=[
                'role_name' => 'required',
                'role_description' => 'required',
            ];

            $validation = Validator::make($requests, $rules);

            $validation->after(function($validation) use($requests){

            });

            if($validation->fails()){
                return response()->json(['errors' => $validation->errors()->toArray()]);
            }

            $role_id=$requests['role_id'];
            $role_name=$requests['role_name'];
            $role_description=$requests['role_description'];

            $role = DB::table('role')->where('role_id', $role_id)->first();

            if (is_null($role)) {
                return response()->json(['status' => 'error', 'message'=>'role does not exist']);
            }

            DB::table('role')
                ->where('role_id', $role_id)
                ->update([
                    'role_name' => $role_name,
                    'role_description' => $role_description]);

            $roles= $this->allroles();
            return response()->json(['status' => 'success', 'message' => 'role updated with success', 'roles' => $roles]);
            
        }catch (\Exception $e) {
            \Log::error($e);
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function deleterole(){
        try {
            $requests = request()->all();
            
            $role_id = $requests['role_id'];

            DB::table('role')
                    ->where('role_id', $role_id)
                    ->update(['role_deleted' => 1]);

            $roles= $this->allroles();

            return response()->json(['status' => 'success','message' => 'role deleted successfully', 'roles'=> $roles]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }

    public function showrole(){
        try {
            $role = DB::table('role')
            		->where('role_id', request()->get('role_id'))
                    ->first();

            if(is_null($role)){
                return response()->json(['status' => 'warning', 'message'=> 'this role already deleted']);
            }

            return response()->json(['status' => 'success', 'role'=> $role]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'please contact administrator if the problem persists', 'info' => $e->getMessage()]);
        }
    }
}
