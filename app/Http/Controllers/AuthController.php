<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use  Hash;
use Str;
class AuthController extends Controller{

    public function index(Request $request){
  return  view('login');
    }
    public function forgot_password(Request $request){
        return view('forgot');
        // echo "forgot";die();
    }
    public function register(Request $request){
      // echo"ayana";die(); 
      return view('register');
    } 
    public function register_post(Request $request){
      // dd($request->all()); 
      $user = new User; 
      $user->name  =  trim($request->name);
      $user->email = trim($request->Email);
      $user->password =  Hash::make($request->password);
      $user->remember_token = Str::random(50); 
      $user->save();



      return redirect('/')->with('success', 'Register successfully');
          
    }
}
?>
