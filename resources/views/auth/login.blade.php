<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lumino - Login</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<br><br><br><br>
<br><br><br>
<br><br><br>
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Log in</div>
        <div class="panel-body">
      {!! Form::open(['url'=>'login']) !!}
      <div class="login-form">


        <fieldset>
              <div class="form-group">
       <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
              </div>

        <div class="control-group">
        <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>

        <button type="submit" class="btn btn-primary btn-large btn-block">login</button>
        
      </div>
      {!! Form::close() !!}
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  
  
<script src="{{ asset ('js/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
</body>
</html>
