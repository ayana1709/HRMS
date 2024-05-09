
<?php 
namespace App\Http\Middleware;
use closure;

use Illuminate\Support\Facades\Auth;
class AdminMiddleWare{

public function handle($request, closure $next){
    if(Auth::cheack()){

          if(Auth::user()->is_role==1){

            return $next($request);
          }else{
            Auth::logout();
            return redirect(url('/'));



          }



    } else{
        Auth::logout();
        return redirect(url('/'));
    }


}


}



?>