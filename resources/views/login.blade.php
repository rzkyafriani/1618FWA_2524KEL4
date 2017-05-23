<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>@yield('page_title', 'Halaman Awal') | Laboratorium FW</title>
		<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{asset('web/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<script src="{{asset('web/js/libs/jquery-1.6.2.min.js')}}"></script>
<script src="{{asset('web/js/basic-jquery-slider.js')}}"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>


		<style type="text/css">
				body{
						padding-top: 0px;
						padding-bottom: 70px;
				}

				.startter-template{
						padding: 40px 15px;
						text-align: center;
				}

				.form-horizontal{
						padding: 15px 10px;
				}

				footer{
					padding-top: 15px;
					text-align: right;	
				}
				.header{
					height: 700px;
				}
		</style>
</head>
<body>
<div class="header">
<div class="wrap5">
    
    <div class="logo">
            <a href=""><img src="{{asset('web/images/logo3.png')}}" /></a>

		<!-- <nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
			<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="{{url('/')}}" class="navbar-brand">Laravel-5</a>
			</div>
		</div>
	</nav> -->
<div class="clearfix"></div>
			<div class="col-md-4 col-md-offset-4">
				@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
							</ul>
						</div>
				@endif
<div class="panel panel-default">
							<div class="panel-heading">
								<strong>Masuk Aplikasi</strong>
							</div>
{!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
						<div class="form-group">
								<label class="col-md-4 control-label">Username</label>
						<div class="col-sm-8">

{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
						</div>
					</div>
					<div class="form-group">
							<label class="col-sm-4 control-label">Password</label>
							<div class="col-sm-8">
{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
							</div>
</div>
					<div style="width: 100%;text-align: right;">
							<button class="btn btn-primary"><i class="fa fa-lock"></i>Masuk</button>
							<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
					</div><br>
					
        <!-- <a href="/regis">Belum Punya Akun?</a> -->
{!! Form::close() !!}
					</div>
				</div>
</div>
</div>
</div>
</div>
		<!-- <nav class="navbar navbar-default navbar-fixed-bottom">
				<footer class="container">

				</footer> -->
<nav class="navbar navbar-default navbar-fixed-bottom">
<div class="footer-bottom">
<div class="wrap">  
    <div class="copy">
        <p>&copy; 2017 Kelompok4_A2015 | Design by Kelompok 4</p>
    </div>
 </div>
</div>
	
	</nav>

	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript"> $(function(){
			$('[data-toggle="tooltip"]').tooltip()});
	</script>
</body>
</html>