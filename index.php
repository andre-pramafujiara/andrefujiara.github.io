<?php  
	include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="Personal Portfolio Template from seniman koding">
	<meta name="keyword" content="app, landing, software, html, responsive">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<!-- Title -->
	<title>Personal Portfolio Template</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<!-- Main Style -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- Responsive -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>
	<!--side bar -->
	<div id="sidebar">
		<div class="sidebar-title">
			<div class="sidebar-title-img">
				<img src="assets/img/andre.jpeg" alt="Foto Andre" class="img-fluid">
			</div>
			<div class="sidebar-title-text">
				Andre Pramafujiara
			</div>
		</div>
		<nav class="menu">
			<ul>
				<li> <a href="#main-part">Home</a></li>
				<li> <a href="#about-us">About</a></li>
				<li> <a href="#service">Keahlian</a></li>
				<li> <a href="#galeri">Galeri</a></li>
				<li> <a href="#nomor">Contact</a></li>
			
			</ul>
		</nav>	
		
	</div>
	<!--end side bar -->

	<!-- main part -->

	<div id ="main-part">
		<section id="intro-area">
			<div class="container">
				<div class="caption-intro">
					<h4>Selamat Datang Di Portfolio Pribadi Saya</h4>
					<h1>Web Designer</h1>
					<div class="social-intro">
						<ul>
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
							
						</ul>
					</div>
					<div class="cta-intro">
						<a href="#">Contact Sekarang</a>
					</div>
				</div>
			</div>
		</section>

			<!--about -->
		<section id="about-us">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="about-us-img">
							<img src="assets/img/7.jpeg" alt="abut-us" class="image">
						</div>
					</div>
					<div class="col-lg-7">
						<div class="about-us-text">
							<div class="about-us-title">
								<p>Tentang Saya</p>
								<p>web designer</p>
							</div>
							<div class="abut-us-ex">
								<p>Anak pertama dari dua bersaudara.</p>
							</div>
							<div class="row about-us-infor">
								<div class="col-lg-6 col-md-6">
									<div class="about-us-infor-detail">
										<i class="fa fa-user-o"></i>
										<p>Nama</p>
										<p>Andre Pramafujiara</p>
									</div>
									<div class="about-us-infor-detail">
										<i class="fa fa-envelope-o"></i>
										<p>Email</p>
										<p>andre.Pramafujiara08@gmail.com</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="about-us-infor-detail">
										<i class="fa fa-calendar-o"></i>
										<p>Tangga Lahir</p>
										<p>02 Maret 2000</p>
									</div>
									<div class="about-us-infor-detail">
										<i class="fa fa-envelope-o"></i>
										<p>Alamat</p>
										<p>Nusa Tenggara Barat</p>
									</div>
								</div>
							</div>
							<div class="about-us-infor-cta">
								<a href="#"></a>
								<a href="#">Diri Saya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--end about -->
		<!--service -->
		<section id="service">
			<div class="container">
				<div class="section-title">
					Keahlian Saya
				</div>
				<div class="service-detile">
					<div class="row">
						<div class="col-lg-3 col-md-6 text-center">
							<div class="service-selection">
								<div class="service-icon">
									<i class="fa fa-code"></i>
								</div>
								<div class="service-description">
									<p>HTMLr</p>
									
								</div>
							</div>
							</div>
							<div class="col-lg-3 col-md-6 text-center">
							<div class="service-selection">
								<div class="service-icon">
									<i class="fa fa-desktop"></i>
								</div>
								<div class="service-description">
									<p>CSS</p>
									
								</div>
							</div>
							</div>
							<div class="col-lg-3 col-md-6 text-center">
							<div class="service-selection">
								<div class="service-icon">
									<i class="fa fa-mobile"></i>
								</div>
								<div class="service-description">
									<p>Javascript</p>
									
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
							<div class="service-selection">
								<div class="service-icon">
									<i class="fa fa-code"></i>
								</div>
								<div class="service-description">
									<p>PHP</p>
									
								</div>
							</div>
						</div>
				</div>
			</div>
		</section>
		<!--end service -->
		<!-- galeri-->
		<section id="galeri">
			<div class="galeri" style="
			padding-top: 30px;
			padding-bottom: 30px;
			background: grey">
				<h2 style="
				text-align: center;
				font-size: 50px;
				font-weight: 700;">Galery Foto</h2>
					<a href="input.php" style="color: yellow; font-size: 20px; font-weight: 500; margin-left: 20px;">+Tambah Foto</a>

					<table border="0" style="
					text-align: center;
					margin-left: 26%;">
						
										
						<?php  
						$query = mysqli_query($conn, "SELECT * FROM tb_gambar");
						while ($row = mysqli_fetch_array($query)){
						?>

						<tr>
							<td style="color: transparent;"><?php echo $row['id_gambar']?></td>
							<td style="color: transparent;"><?php echo $row['nama']?></td>
							
							<td><img src="gambar/<?php echo $row['file']?>" width="400px" height = "100px"></td>
							<td style="width: 100px">
								<a href="edit.php?id=<?php echo $row['id_gambar']?>" style="
								 color: yellow; font-size: 20px;">Edit</a><br>
								<a href="hapus.php?id=<?php echo $row['id_gambar']?>" style="
								font-size: 20px; color: red">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</table>

			</div>
		</section>
		<!--end galeri-->
		<!--contact-->
		<section id="nomor" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(assets/img/4.jpg);background-size: cover;background-position: center; color: #fff; text-align: center; padding-top: 80px; padding-bottom: 50px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="contact-detile" style="margin-bottom: 30px">
							<i class="fa fa-volume-control-phone" style="font-size: 30px; margin-bottom: 15px"></i>
							<p>HP</p>
							<p>+62 085238738033</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-detile">
							<i class="fa fa-envelope-o" style="font-size: 30px; margin-bottom: 15px"></i>
							<p>EMAIL</p>
							<p>andre.pramafujiara08@gmail.com</p>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="contact-detile">
							<i class="fa fa-map" style="font-size: 30px; margin-bottom: 15px"></i>
							<p>ALAMAT</p>
							<p>Sumbawa, Nusa Tenggara Brat</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--end contact -->

	</div>
	<!--end main part -->	





	<!--Jquery js-->
    <script src="assets/js/jquery-3.0.0.min.js"></script>
    <!--Bootstrap js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Smooth Scroll -->
    <script src="assets/js/smooth-scroll.js"></script>
    <!--Main js-->
    <script src="assets/js/main.js"></script>
    


</body>
</html>