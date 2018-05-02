<!DOCTYPE html>
<html lang="en">
<head>
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
<title>Register</title>
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
    CONTACT SECTION
============================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">


			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>FORM REGISTER</h2>
					<form method="post">
            {{ csrf_field() }}
							<input name="no_ktp" type="text" class="form-control" id="no_ktp" placeholder="No KTP" required/>
              <input name="nama_users" type="text" class="form-control" id="nama_users" placeholder="Nama" required/>
							<input name="email" type="email" class="form-control" id="email" placeholder="Email" required/>
							<input name="password" type="password" class="form-control" id="password" placeholder="Password" required/>
							<input name="alamat" type="textarea" class="form-control" id="alamat" placeholder="Alamat" required/>
						<div class="col-md-6 col-sm-10">
							<button type="submit" name="submit" class=" btn btn-danger" id="submit">Submit</button>
							<!-- <input name="submit" type="submit" class="form-control" id="submit" value="Register"> -->
						</div>
					</form>
				</div>
			</div>
		</div>

    <div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
      <div class="contact_des">
        <font color="white">
          <h3>Register</h3>
        </font>
          <p><font color="white">Bagi Anda yang belum memiliki akun. <br> Anda bisa registrasi disamping ini.</font></p>
          <p></p>
        <a href="{{ route('home') }}" class="btn btn-danger">HOME</a>
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

                    | Design by D4-RPL</p>

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
<script type="text/javascript">
	$(function(){
		var form = $('form')
		form.on('submit', function(e){

			e.preventDefault()
			$.ajax({
				method: 'POST',
				url: '/register-api',
				data: form.serializeArray(),
				success: function( res ){
					console.log(res)
					if( res.error == 0 ){
						swal(
						  'Success',
						  res.message,
						  'success'
						).then(OK => {
              if(OK){
                window.location.href = "{{ route('register') }}";
              }
            });
					} else{
						swal(
						  'Fail',
						  res.message,
						  'error'
						)
					}
				}
			})
		})
	})
</script>
</body>
</html>
