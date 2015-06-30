<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

use View;

use Validator;
use Input;
use Redirect;
use Auth;
use Session;
use App\Login;
use App\User;

use DB;
use App\Quotation;
use Hash;

class UsersController extends BaseController {
    
    
    public function __construct(){
        
       // $this->middleware('user');
    }

    public function getIndex() {
        //make view.
        return View('pages.home');
    }

    public function postLoginuser($data = 'null') {

        $validator = Validator::make(array(
                    'password' => Input::get('password'),
                    'email' => Input::get('email'),
                        ), array(
                    'password' => 'required',
                    'email' => 'required|email'
        ));

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('/login')->with('login_message', $messages);
        } else {

            $credentials = [
                "email" => Input::get("email"),
                "password" => Input::get("password")
            ];
            $remember = (Input::has('remember_me')) ? true : false;

            if (Auth::attempt($credentials, $remember)) {
                
                $message = "logged in ";
                
                if(Auth::user()->user_type != '1'){
                    
                    return Redirect::to('/login/dashboard')->with('login_message', $message);
                }
                else{
                    
                    return Redirect::to('/login/userlist');
                }
            } else {
                $message = "Invalid username or password";
                return Redirect::to('/login')->with('login_message', $message);
            }
        }
    }

    public function postCreate() {

        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->passes()) {
            
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
             return Redirect::to('/login')->with('create_message', 'Thanks for registering!');
        } else {
           return Redirect::to('/login/register')->with('login_message', 'There are empty fields!');
        }
    }

    public function getRegister() {

        return View('pages.register');
    }
    public function getDashboard(){
         return View('pages.dashboard');
    }
    public function getUserlist(){
        
        
        $users= array();  
        $users['data'] = Login::getUserlist();
        return View('pages.userlist')->with($users);
    }
    
    public function postUpdateprofile()
    {
        
        // $validator = Validator::make(Input::all(), User::$rules);
         
         if (!empty(Input::all())) {
            
            
            $firstname = Input::get('firstname');
            $lastname = Input::get('lastname');
            $email = Input::get('email');
            $user_id = Input::get('user_id');
            $password = Input::get('password');
            
            $data_temp= array(   
				'firstname' => $firstname ,
				'lastname' => $lastname,
                                'email' =>  $email ,
                                'password' => Hash::make($password)
				);	
		
		$updatedata = DB::table('users')					
					->where('id', $user_id)
					->update($data_temp);
                
             return Redirect::to('login/dashboard/')->with('create_message', 'your profile updated successfully!');
        } else {
           return Redirect::to('/login/editprofile/{id?}')->with('login_message', 'There are empty fields!');
        }
         
         
    }

    public function Editprofile($id){
        //
     
       //return $id;
        $data = array();
        $data['firstname'] = Auth::user()->firstname;
        $data['lastname'] = Auth::user()->lastname;
        $data['email'] = Auth::user()->email;
        $data['password']= Auth::user()->password;
        $data['user_id'] =Auth::user()->id;
        
        return View::make('pages.editprofile')->with($data);
        
    }

    public function getLogout() {
        Auth::logout();
        Session::flush();
        //return Redirect::to(ADMIN_TEXT.'login')->with('login_message', 'Your are now logged out!');
        return Redirect::to('/login');
    }
    
    public function getDelete($id)
    {
         DB::table('users')->where('id', '=', $id)->delete();
         return redirect('login/userlist')->with('data', ['some kind of data']);
         
        return  View::make('pages.userlist')->with('delete_message', 'your profile updated successfully!');
        
    }

}
