<!DOCTYPE html>
<html lang="en">
<head>
	<meta charshet="UTF-8">		
	<title>@yield('page_tittle','Halaman Awal') | Pemerograman Framework</title>
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
			padding-top: 70px;
			padding-bottom: 70px;
		}
		.stsrter-template{
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

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="nvbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				<a href="{{url('/master-member')}}" class="navbar-brand">Member</a>
			</div>
			

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li >	
						<a href="{{url('data_pesan_member')}}"><i class="glyphicon glyphicon-book"></i> Riwayat Pemesanan</a></li>

					</li>
					<li >	
						<a href="{{url('menu_member')}}"><i class="glyphicon glyphicon-list"></i> Daftar Menu</a></li>

					</li>
					<li >	
						<a href="{{url('lagu_member')}}"><i class="glyphicon glyphicon-music"></i> Daftar Lagu</a></li>
					</li>

					<li >	
						<a href="{{url('room_member')}}"><i class="glyphicon glyphicon-list"></i> Daftar Room</a></li>

					</li>
					<li >	
						<a href="{{url('jenis_member')}}"><i class="glyphicon glyphicon-list"></i> Daftar Jenis Room</a></li>

					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@foreach($member as $mbr) {{$mbr->nama}} @endforeach <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('edit_member/edit/'.$mbr->id)}}"><i class="glyphicon glyphicon-cog"></i> Edit Profil</a></li>
							<li class="divider"></li>
							<li><a href="{{url('pesan_room')}}"><i class="glyphicon glyphicon-check"></i> Pesan</a></li>	
							<li class="divider"></li>
							<li><a href="{{url('logout')}}"><i class="glyphicon glyphicon-off"></i> Logout</a></li>	
						</ul>					
				</ul>
				
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="clearfix"></div>
	<div class="container">
		@if (Session::has('informasi'))
		<div class="alert alert-info">
			<strong>Informasi: </strong>{{Session::get('informasi')}}
		</div>
		@endif	

		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
		@endif

		@yield('container')
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom">
<div class="footer-bottom">
<div class="wrap">  
    <div class="copy">
        <p>&copy; 2017 Kelompok4_A2015 | Design by Kelompok 4</p>
    </div>
 </div>
</div>
	
	</nav>
	<!-- <nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
			created by <a href=""><span><i class="fa fa-twitter" style="color:#1daf12"></i>Betty</span></a>
		</footer>
	</nav> -->
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
	$(function(){
		$('[data-toggle="tooltip"]').tooltip()
	});
	</script>


</body>
</html>