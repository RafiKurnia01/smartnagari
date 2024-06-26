<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link href="{{ asset('assets/css/loginstyle.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>
<body>
	@if(session()->has('sukses'))
			<div class="alert alert-success">
				{{ session('gagal') }}
			</div>
                {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('sukses') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div> --}}
                    @endif
                    @if(session()->has('gagal'))
					<div class="alert alert-danger">
						{{ session('gagal') }}
					</div>
                {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('gagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div> --}}
                    @endif
<div class="container">
	<section id="content">
		<form action="{{ route('login-admin-auth') }}" method="POST">
			@csrf
			<h1>Login Admin</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="nama" id="nama" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" id="password" />
			</div>
			<div>
				<button type="submit" style="background-color: yellow; border-radius: 5px; color: black; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;">Login</button>

			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>