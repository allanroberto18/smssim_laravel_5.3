<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastrar novo usuário</title>
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
<body class="hold-transition register-page">
<div class="register-box">
	<div class="register-logo">
		<a href="#"><b>Cadastrar </b>Usuário</a>
	</div>
	<div class="register-box-body">
		<p class="login-box-msg">Preencha o formulário abaixo</p>
		{!! Form::open([ 'url' => '/register', 'method' => 'POST', 'role' => 'form']) !!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
			{!! Form::text('name', old('name'), array_merge(['class' => 'form-control', 'placeholder' => 'Inserir Nome'] )) !!}
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
			@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
			@endif
		</div>

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

		<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
			{!!  Form::password('password_confirmation', array_merge([ 'id' => 'password-confirm', 'class' => 'form-control', 'placeholder' => 'Inserir Confirmação de Senha'] )) !!}
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			@if ($errors->has('password_confirmation'))
				<span class="help-block">
					<strong>{{ $errors->first('password_confirmation') }}</strong>
				</span>
			@endif
		</div>

		<!-- Dica de Senha Form Imput -->
		<div class="form-group {{ $errors->has('dica_senha') ? 'has-error': '' }} has-feedback">
			{!! Form::text("dica_senha", null, ['class' => 'form-control', 'placeholder' => 'Inserir Dica de Senha']) !!}
			@if($errors->has('dica_senha'))
				<span class="help-block">
					<strong>{{ $errors->first('dica_senha') }}</strong>
				</span>
			@endif
		</div>

		<div class="row">
			<div class="col-xs-12">
				<button type="submit" class="btn btn-primary btn-block btn-flat">
					<i class="fa fa-btn fa-user"></i> Cadastrar
				</button>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('src/node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('src/node_modules/admin-lte/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
