<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRMS | Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>HUMAN</b>RESOURCE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register</p>

      <form action="{{url('register_post')}} " method="post">
  {{csrf_field()}}


      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Name" name="name" required value="{{old('name')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

<span style="color: red;">{{$errors->first('name')}}</span>
  



        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="Email" required value="{{old('Email')}}" onblur="duplicateEmail(this)">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

<span style="color: red;" class="duplicate_message">{{$errors->first('Email')}}</span>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required value="{{old('password')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
<span style="color: red;">{{$errors->first('password')}}</span>
 
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="confirm Password" name="confirm_password" required value="{{old('confirm_password')}}" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

<span style="color: red;">{{$errors->first('confirm_password')}}</span>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{ url('forgot-password') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ url('/ ')}}" class="text-center">Sign up</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('public/backend/dist/js/adminlte.min.js')}}"></script>



<script type="text/javascript">
    function duplicateEmail(element){
       var email = $(element).val(); 
       console.log(email);
    //   $.ajax({
    //     type: "POST",
    //     url:  '{{ url('checkemail')}}',
    //     data:{
    //            email: email,
    //            _token: "{{csrf_token()}}"
    //     },
    //     dataType: "json",
    //     success:  function(res){
    //       if(res.exists){
    //          $(".duplicate_message").html("That email is taken. try another")
    //       }else{
    //           $(".duplicate_message").html("")
    //       }

    //     },
    //     error:function(jqXHR, exception){  

    //     }

    //   });

    // 
  } 
  

</script>
</body>
</html>
