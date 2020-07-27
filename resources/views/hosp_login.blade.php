<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.lab.themebucket.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 13:23:32 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Hospital Login</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

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

      <form class="form-signin" action="{{url('post-hosp-login')}}" method="POST">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Hospital Sign In</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

            <div class="text-center">
                Don't have an account yet?
                <a class="" href="{{url('/hosp_registration')}}">
                    Create an account
                </a>

                {{-- <div class="form-wrap">
                  <form action="{{url('post-login')}}" method="POST" id="logForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="control-label mb-10" for="InputEmail">Email address</label>
                      <input type="email" name="email" class="form-control" required="" id="InputEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                      <input type="password" name="password" class="form-control" required="" id="inputPassword" placeholder="Enter pwd">
                    </div>
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-info btn-success btn-rounded">sign in</button>
                    </div> --}}
                  </form>
                </div>
            </div>

        </div>

      </form>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  </body>

<!-- Mirrored from bucketadmin.lab.themebucket.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 13:23:32 GMT -->
</html>
