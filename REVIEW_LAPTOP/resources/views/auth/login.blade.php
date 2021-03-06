<!DOCTYPE html>
<head>
<title>Đăng nhập quản lý</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ url('/') }}/login/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ url('/') }}/login/css/style.css" rel='stylesheet' type='text/css' />
<link href="{{ url('/') }}/login/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ url('/') }}/login/css/font.css" type="text/css"/>
<link href="{{ url('/') }}/login/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{ url('/') }}/login/js/jquery2.0.3.min.js"></script>
</head>
<body>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<div class="log-w3">
<div class="w3layouts-main">
	<h1>Đăng nhập</h1>
		<form action="{{route('postLogin')}}" method="post">
            @csrf
			<input type="email" class="ggg" name="email" placeholder="Nhập email" required="" autocomplete="off">
			<input type="password" class="ggg" name="password" placeholder="Mật khẩu" required="" autocomplete="off">
			<!--<span><input type="checkbox" />Ghi nhớ đăng nhập</span>-->
			<!--<h6><a href="#">Forgot Password?</a></h6>-->
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="login">
				<h3 style="text-align:center;" ><a href="{{ route('home') }}">Về trang chủ</a></h3>
		</form>
		<!--<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>-->
</div>
</div>
<script src="{{ url('/') }}/login/js/bootstrap.js"></script>
<script src="{{ url('/') }}/login/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ url('/') }}/login/js/scripts.js"></script>
<script src="{{ url('/') }}/login/js/jquery.slimscroll.js"></script>
<script src="{{ url('/') }}/login/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ url('/') }}/login/js/jquery.scrollTo.js"></script>
</body>
</html>
