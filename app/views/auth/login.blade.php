<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>泸州农信抽奖系统后台-登录</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('public/css/AdminLTE.min.css')}}"> 
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('public/plugins/iCheck/flat/blue.css')}}">  

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html">泸州农信抽奖系统后台</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">用户验证</p>
                {{ Form::open(array('class' => 'form-signin')) }} 
                <div class="form-group has-feedback">
                    {{ Form::text('email','',array('class' => 'form-control','placeholder'=>'请输入邮箱' )) }} 
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    {{ Form::password('password',array('class' => 'form-control','placeholder'=>'请输入密码' )) }} 
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-7 col-xs-offset-1">
                        <div class="checkbox icheck">
                            <label>
                                {{ Form::checkbox('rememberme',null) }}记住登录
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        {{ Form::submit('登录', array('class' => 'btn btn-flat btn-primary btn-block')) }} 
                    </div><!-- /.col -->
                </div>
                {{ Form::close() }}
                <div class="social-auth-links text-center">
                    <p>- 泸州农信 &copy;2015 -</p>
                    @include('flash::message') 
                </div><!-- /.social-auth-links -->
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
        <!-- iCheck -->
        <script src="{{asset('public/plugins/iCheck/icheck.min.js')}}"></script>  
        <script>
        </script>
    </body>
</html>
