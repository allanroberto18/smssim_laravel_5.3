<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Entrar</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="{{ asset('src/node_modules/admin-lte/bootstrap/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('src/node_modules/admin-lte/dist/css/AdminLTE.min.css') }}">

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
		<a href="#"><b>Área </b>Administrativa</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Iniciar uma nova sessão</p>
		{!! Form::open([ 'url' => '/login', 'method' => 'POST', 'role' => 'form']) !!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
			{!! Form::text('email', old('email'), array_merge(['class' => 'form-control', 'placeholder' => 'Inserir E-mail'] )) !!}
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			@if ($errors->has('email'))
				<span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
			@endif
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
			{!! Form::password('password', array_merge(['class' => 'form-control', 'placeholder' => 'Inserir Senha'] )) !!}
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			@if ($errors->has('password'))
				<span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
			@endif
		</div>
		<div class="row">
			<div class="col-xs-12">
				<button type="submit" class="btn btn-primary btn-block btn-flat">
					<i class="fa fa-btn fa-sign-in"></i> Entrar
				</button>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<a class="btn btn-default btn-block btn-flat" href="{{ url('/register') }}">
					<i class="fa fa-btn fa-user-plus"></i>
					Novo Usuário
				</a>
			</div>
			<div class="col-xs-6">
				<a class="btn btn-default btn-block btn-flat" href="{{ url('/password/reset') }}">
					<i class="fa fa-btn fa-envelope"></i>
					Esqueceu a senha?
				</a>
			</div>
			<!-- /.col -->
		</div>
	{!! Form::close() !!}
	<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 2.2.3 -->
	<script src="{{ asset('src/node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{ asset('src/node_modules/admin-lte/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- iCheck -->
</body>
</html>