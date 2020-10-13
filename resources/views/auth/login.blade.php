<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rotary Durbarmarg Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

<div class="login-box pt-5">
 
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h5 class="text-center"><b>Rotary Club of Durbarmarg</b></h5>
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
       
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email">
              @error('email')
              <span class="fa fa-envelope form-control-feedback">{{ $message }}</span>
              @enderror
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
           @error('passowrd')
              <span class="fa fa-envelope form-control-feedback">{{ $message }}</span>
              @enderror
        </div>
        <div class="">
         
          <!-- /.col -->
          <div class="text-center">
            <button type="submit" class="btn btn-warning btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
