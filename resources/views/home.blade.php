<!DOCTYPE html>
<html lang="en">
<head>
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
<title>Home</title>
<link rel="icon" type="images/png" href="{{ URL::asset('images/rocket.png') }}">
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">

<!-- Main css -->
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"></a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left"> <br>
				<a href="{{ route('login') }}"><input type="button" name="login" value="Login Admin" class="btn btn-primary wow fadeInUp" data-wow-delay="2.9s"></a> &nbsp;
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('home') }}" class="smoothScroll">Home</a></li>
				<!-- <li><a href="#overview" class="smoothScroll">Visi & Misi</a></li>
				<li><a href="#detail" class="smoothScroll">Divisi</a></li>
				<li><a href="#speakers" class="smoothScroll">Organisasi</a></li>
				<li><a href="#program" class="smoothScroll">Gallery</a></li>
				<li><a href="#contact" class="smoothScroll">Contact</a></li> -->
			</ul>
		</div>
	</div>
</div>


<!-- =========================
    INTRO SECTION
============================== -->
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<a href="{{ route('home') }}"><img src="{{ URL::asset('images/3.png') }}" align="center" class="wow bounceIn" data-wow-delay="1.6s"></img></a>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">Badan Lingkungan Hidup</h1>
				<h4 class="wow bounceIn" data-wow-delay="2.0s">Kabupaten Indramayu</h4>
			</div>
		</div>
	</div>
</section>


<!-- =========================
    FOOTER SECTION
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2018 BLH-Indramayu

                    | Design by D4-RPL Polindra</p>

				<ul class="social-icon">
					<!-- <li><a href="https://web.facebook.com/rpi.polindra/" target="_blank" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="https://www.instagram.com/robotika_polindra/" class="fa fa-instagram wow fadeInUp" target="_blank" data-wow-delay="1.3s"></a></li> -->
				<!--
					<li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
				-->
				</ul>

			</div>

		</div>
	</div>
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS
============================== -->
<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.parallax.js') }}"></script>
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/smoothscroll.js') }}"></script>
<script src="{{ URL::asset('js/wow.min.js') }}"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.1.0/dist/sweetalert2.all.js"></script>
<!-- <script type="text/javascript">
	$(function(){
		var form = $('form')
		form.on('submit', function(e){
			e.preventDefault()
			$.ajax({
				method: 'POST',
				url: '/index-api',
				data: form.serializeArray(),
				success: function( res ){
					if( res.error == 0 )
					{
						swal({
  						title: 'Are You Sure?',
							text: "",
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Yes, Send it!'
						}).then((result) => {
							if (result.value) {
								swal(
									'Send!',
									'Your comment has send.',
									'success'
								)
  						}
						})
					}
				}
			})
		})
	})
</script> -->
</body>
</html>
