<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>الخدمات الإلكترونية للملتقى </title>

    <meta name="description" content="">
    <meta name="author" content="Hadji Kouceyla">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/admin-assets/css/bootstrap/bootstrap.css" /> 
    <link rel="stylesheet" href="/admin-assets/css/bootstrap/bootstrap-rtl.css" />

    <!-- Base Styling  -->
    <link rel="stylesheet" href="/admin-assets/css/app/app.v1.css" />
    <link rel="stylesheet" href="/admin-assets/css/app/moltaka.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="login-page">  
    
    
    <div class="container pt60">


        <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <h3 class="text-center">الخدمات الإلكترونية للملتقى </h3>
            <p class="text-center">تسجيل الدخول</p>
            <hr class="clean">

            @include('admin._partials.flash-message')

            {{ Form::open() }}
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                    {{ Form::text('identity', null, ['class' => 'form-control', 'placeholder' => 'رقم الهوية/الإقامة']) }}
                </div>


                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    {{ Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'الجوال']) }}
                </div>

                {{ Form::submit('الدخول', ['class' => 'btn btn-purple btn-block']) }}

            {{ Form::close() }}

        </div>
        </div>
    </div>

    @include('admin._partials.footer')
    
    
</body>
</html>
