<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    
    
    <link rel="stylesheet" href="css/normalizeform.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,latin-ext'>

        <link rel="stylesheet" href="css/styleform.css">

    
    
    
  </head>

  <body>

    <div id="login-main">
  <div class="container login-main">
    <div class="user-img">
      <img src="" class="img-circle user-img img-thumbnail" alt="">
    </div>

    <div class="col-md-4 login-form">
      <form class="form-horizontal" role="form" method="POST" action="{{route('auth.store')}}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <input type="text" class="form-control login-field" value="" placeholder="Username" id="login-name" name="name">
          <label for="login-name" class="login-name"><i class="fa fa-envelope"></i></label>
        </div>

        <div class="form-group">
          <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" name="password">
          <label for="login-pass" class="login-pass"><i class="glyphicon glyphicon-lock"></i></label>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-lg btn-block" value="Login"/>

        </div>

        <div class="form-group input-check">
          <input type="checkbox" id="remember-me" name="remember-me" value="" checked>
          <label for="remember-me"><span>Remember me</span></label>
        </div>
      </form>
    </div>
    <!--login-form-->


  </div>
  <!--container-->
</div>
<!--[END]login-main-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>

    
    
    
    
  </body>
</html>
