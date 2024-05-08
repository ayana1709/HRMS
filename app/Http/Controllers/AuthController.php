<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
}
?>
