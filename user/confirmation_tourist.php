<?php
	include '../helper/connection.php';

	if (isset($_POST['submit'])){
        $kode_cust = $_POST["kode_cust"];

        $id1 = mysqli_query($con, "select id_tourist_booking from tb_tourist_booking where kode_cust = '$kode_cust'");
		$id2 = mysqli_fetch_assoc($id1);
        $coba = $id2["id_tourist_booking"];
        
		$code=$_FILES["gambar"]["error"];
		if($code===0){
			$nama_folder="../upload";
			$tmp=$_FILES["gambar"]["tmp_name"];
			$nama_file=$_FILES["gambar"]["name"];
			$path="$nama_folder/$nama_file";
			$upload_check=false;
			$tipe_file=array("image/jpeg","image/jpg","image/png");

			if(!in_array($_FILES["gambar"]["type"],$tipe_file)){
				$error.="Cek kembali ekstensi file anda (*.jpeg,*.jpg,*.png)<br>";
				$upload_check=true;
				header("Location: plane_pay.php?error=$error");
			}
			
			if(file_exists($path)){
				$error.="File dengan nama yang sama sudah tersimpan, coba lagi<br>";
				$upload_check=true;
				header("Location: pay_tourist.php?error=$error");
			}
			if(!$upload_check AND move_uploaded_file($tmp,$path)){ 
				$query="insert into tb_tourist_booking_detail (id_tourist_booking,bukti_trans,flag) values ('$coba','$path','1')";
				
				if(mysqli_query($con, $query)){
					header("Location: confirmation_tourist.php");
				}else{
					$error=urlencode("Data tidak berhasil ditambahkan");
					header("Location: pay_tourist.php?error=$error");
				}
				
				mysqli_close($con);      
			}
			else{
				$error="Upload Gambar Gagal! Cek kembali ekstensi file anda (*.jpeg,*.jpg,*.png)<br>";
				header("Location: pay_tourist.php?error=$error");
			}
		}
	}
?>
<html>
    <head>
        <title>Roligt Travel</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <!-- css -->
        <link rel="stylesheet" href="../css/linearicons.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/magnific-popup.css">
		<link rel="stylesheet" href="../css/jquery-ui.css">				
		<link rel="stylesheet" href="../css/nice-select.css">							
		<link rel="stylesheet" href="../css/animate.min.css">
		<link rel="stylesheet" href="../css/owl.carousel.css">				
		<link rel="stylesheet" href="../css/main.css">
        <!-- end css -->
        <!-- script -->
        <script src="../js/vendor/jquery-2.2.4.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/vendor/bootstrap.min.js"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 		<script src="../js/jquery-ui.js"></script>					
  		<script src="../js/easing.min.js"></script>			
		<script src="../js/hoverIntent.js"></script>
		<script src="../js/superfish.min.js"></script>	
		<script src="../js/jquery.ajaxchimp.min.js"></script>
		<script src="../js/jquery.magnific-popup.min.js"></script>						
		<script src="../js/jquery.nice-select.min.js"></script>					
		<script src="../js/owl.carousel.min.js"></script>							
		<script src="../js/mail-script.js"></script>	
        <script src="../js/main.js"></script>
        <!-- end script -->
    </head>
    <body>
        <header id="header">
			<div class="header-top">
				<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				<ul>
			  					<li><a href="../login/index.php">Logout</a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fab fa-facebook" text-white></i></a>
								<a href="#"><i class="fab fa-twitter" text-white></i></a>
								<a href="#"><i class="fab fa-dribbble" text-white></i></a>
								<a href="#"><i class="fab fa-behance" text-white></i></a>
							</div>
			  			</div>
			  		</div>			  					
				</div>
			</div>
			<div class="container main-menu">
				<div class="row align-items-center justify-content-between d-flex">
				    <div id="logo">
				        <a href="landingUser.php"><img src="../img/PicsArt_12-02-08.19.53.png" width="50px" class="mb-3" alt="logo" title="" /></a>
				    </div>
				    <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="landingUser.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="packages.php">Packages</a></li>
				          <li><a href="booking.php">Booking</a></li>
				          <li><a href="contact.php">Contact</a></li>
						  <li><a href="tourist.php">Tourist Attraction</a></li>
						  <li><a href="hotel.php">Hotel</a></li>
                          <li><a href="plane.php">Flight Ticket</a></li>
				        </ul>
				    </nav><!-- #nav-menu-container -->					      		  
				</div>
			</div>
        </header><!-- #header -->
        <!-- start banner Area -->
		<section class="about-banner relative">
			<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
						<h1 class="text-white">
							Confirmation				
						</h1>	
						<p class="text-white link-nav"><a href="landingUser.php">Home </a>  <span class="fas fa-arrow-right"></span>  <a href="plane.php"> Flight Ticket</a> <span class="fas fa-arrow-right"></span> <a href="plane_booked.php"> Booked Ticket</a> <span class="fas fa-arrow-right"></span> <a href="plane_pay.php"> Pay Ticket</a> <span class="fas fa-arrow-right"></span> <a href="plane_confirmation.php"> Confirmation Page</a> </p> 
				        </div>	
				    </div>
			    </div>
		</section>
		<!-- End banner Area -->
		<!-- Start about-info Area -->
		<section class="book-info-area section-gap">
			<div class="container">
                <h2 class="judul-book">This is your confirmation for your pay</h2>
				<p class="sub-judul-book">Please do a screenshot or print this confirmation</p>
				<div class="row align-items-center">
					<div class="col-lg-12 banner-right">
						<table id="booking" class="table table-stripped text-center mt-3" style="width:100%">
							<thead>
								<tr>
									<th>#</th>
									<th>No Transaksi</th>
									<th>Tourist Booking</th>
									<th>Transaction</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$query = "select * from tb_tourist_booking_detail";
							$result = mysqli_query($con, $query);

							if (mysqli_num_rows($result) > 0){
								$index = 1;
								while($row = mysqli_fetch_assoc($result)){
									$no_transaksi = $row["no_transaksi"];
									echo "
									<tr>
										<td>" . $index++ . "</td>
										<td>" .$row["no_transaksi"]. "</td>
										<td>" .$row["id_tourist_booking"]. "</td>
										<td><img src='../upload/".$row["bukti_trans"]. "' height=200px width=200px></td>
									</tr>
									";
								}
							}
							mysqli_close($con); 
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</section>
		<!-- End about-info Area -->
        <!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>About Agency</h6>
							<p>Made your holiday more fun here with us</p>
							<p>We always serve you with pleasure</p>
							<p>Come join our travel</p>
							<p>Be a happy person with travelling</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Navigation Links</h6>
							<div class="row">
								<div class="col">
									<ul>
										<li><a href="landingUser.php">Home</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="packages.php">Packages</a></li>
                                        <li><a href="booking.php">Booking</a></li>
                                        <li><a href="contact.php">Contact</a></li>
									</ul>
								</div>									
							</div>							
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Transaction Fia </h6>
							<p>BRI 0123456789</p>
							<p>Mandiri 0123456789</p>
							<p>BCA 0123456789</p>			
						</div>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">Media Partner</h6>
							<ul class="instafeed d-flex flex-wrap">
								<li><img src="../img/i1.png" alt="" width="60px"></li>
								<li><img src="../img/i2.png" alt="" width="60px"></li>
								<li><img src="../img/i3.png" alt="" width="60px"></li>
								<li><img src="../img/i4.png" alt="" width="60px"></li>
								<li><img src="../img/i5.png" alt="" width="60px"></li>
								<li><img src="../img/i6.jpg" alt="" width="60px"></li>
								<li><img src="../img/i7.png" alt="" width="60px"></li>
								<li><img src="../img/i8.jpg" alt="" width="60px"></li>
								<li><img src="../img/i9.png" alt="" width="60px"></li>
								<li><img src="../img/i10.jpg" alt="" width="60px"></li>
								<li><img src="../img/i11.jpg" alt="" width="60px"></li>
								<li><img src="../img/i12.jpg" alt="" width="60px"></li>
								<li><img src="../img/i13.jpeg" alt="" width="60px"></li>
								<li><img src="../img/i14.jpg" alt="" width="60px"></li>
							</ul>
						</div>
					</div>							
				</div>	
				<div class="row footer-bottom d-flex justify-content-between align-items-center">
					<p>Social Media</p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fab fa-facebook" text-white></i></a>
						<a href="#"><i class="fab fa-twitter" text-white></i></a>
						<a href="#"><i class="fab fa-dribbble" text-white></i></a>
						<a href="#"><i class="fab fa-behance" text-white></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->	
    </body>
</html>