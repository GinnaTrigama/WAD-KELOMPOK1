@extends('template/login')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><img style="position:relative; left: -16px; "src="<?php url('assets/img/tclogo.png'); ?>" width="300"></a>
    </div>
    <?php
  //echo '<div class="alert alert-success"></div>';
?>

        <div class="login-box-body">
            <p class="login-box-msg">Login untuk melanjutkan</p>
            <form action="{{url('/login_acc')}}" method="POST">
                @csrf
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
            </div>
            <a href="#">I forgot my password</a>
            <br>
            <a href="<?php echo url('/register') ?>" class="text-center">Register a new membership</a>
        </div>
</div>
<script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
        });
    });
</script>
@endsection