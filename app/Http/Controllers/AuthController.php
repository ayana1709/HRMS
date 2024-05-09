<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use  Hash;
use Str;

use Illuminate\Support\Facades\Auth;
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
      $user = request()->validate([
         'name'=> 'required',
         'Email'=> 'required|unique:users',
         'password'=>'required|min:6',
         'confirm_password'=>'required_with:password|same:password|min:6'

      ]);
      $user = new User; 
      $user->name  =  trim($request->name);
      $user->email = trim($request->Email);
      $user->password =  Hash::make($request->password);
      $user->remember_token = Str::random(50); 
      $user->save();



      return redirect('/')->with('success', 'Register successfully. ');
          
    }




    public function CheckEmail(Request $request){

      $email =  $request->input('email'); 
      $isExists = User::where('email', $email)->first();
      if($isExists){
  return response()->json(array("exists"=> true));
      }else{
  return response()->json(array("exists"=> false));

      }
    }
    public function login_post( Request $request){
      // dd($request->all()); 
      if(Auth::attempt(['Email'=>$request->Email, 'password'=>$request->password], true)){

   if(Auth::User()->is_role == '1'){
    return redirect()->intended('admin/dashboard');


   }else{
return redirect('/')->with('error', 'No HR Availalbles..... please cheack');
    
   }



      }else{
        return redirect()->back()->with('error', 'please enter the correct credientilals');
      }
    }

}
?>
