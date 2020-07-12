<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.lab.themebucket.net/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 13:25:10 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Login</title>

    <!--Core CSS -->
    
    <link rel="stylesheet" href="{{ URL::asset('bs3/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-reset.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.css') }}">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
  <body class="login-body">

    <div class="container">

      {{-- <form class="form-signin" action="{{url('post-registration')}}">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">

            <p> Enter your account details below</p>
            <input type="text" name="name"class="form-control" placeholder="User Name" autofocus>
            <input type="email" name="email" class="form-control" placeholder="User ID" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="{{url('login')}}">
                    Login
                </a>
            </div>

        </div>

      </form> --}}



      <form action="{{url('post-registration')}}" method="POST" id="regForm">
        {{ csrf_field() }}
       <div class="form-label-group">
         <input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus>
         <label for="inputName">Name</label>

         @if ($errors->has('name'))
         <span class="error">{{ $errors->first('name') }}</span>
         @endif       

       </div> 
       <div class="form-label-group">
         <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
         <label for="inputEmail">Email address</label>

         @if ($errors->has('email'))
         <span class="error">{{ $errors->first('email') }}</span>
         @endif    
       </div> 

       <div class="form-label-group">
         <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
         <label for="inputPassword">Password</label>
          
         @if ($errors->has('password'))
         <span class="error">{{ $errors->first('password') }}</span>
         @endif  
       </div>

       <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
       <div class="text-center">If you have an account?
         <a class="" href="{{url('/')}}">Sign In</a></div>
      </a>
     </form>

    </div>


    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  </body>

<!-- Mirrored from bucketadmin.lab.themebucket.net/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 13:25:10 GMT -->
</html>