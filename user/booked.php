<?php
	include '../helper/connection.php';

    if (isset($_POST['submit'])){
        $name=$_POST["name"];
		$address=$_POST["address"];
		$no=$_POST["no"];
		$to=$_POST["to"];
		$room=$_POST["room"];
		$arrival=$_POST["arrival"];
		$leave=$_POST["leave"];
		$adults=$_POST["adults"];
		$child=$_POST["child"];
		$from=$_POST["from"];
		$ke=$_POST["ke"];
		$departure=$_POST["departure"];
		$return=$_POST["return"];
		$pass=$_POST["pass"];
		$kode_pkt = $_POST["kode_pkt"];
		$query = mysqli_query($con, "select harga from tb_packages where kode_pkt = '$kode_pkt'");
		$rTotal=mysqli_fetch_assoc($query);
		$total = $rTotal["harga"] * $pass;

		
		$query1= mysqli_query($con, "insert into tb_hotel_detail (tujuan_cust, jml_kamar, arrival_date, leave_date, adult, children) values ('$to','$room','$arrival','$leave',$adults,$child)");

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
							Booking				
						</h1>	
						<p class="text-white link-nav"><a href="landingUser.php">Home </a>  <span class="fas fa-arrow-right"></span>  <a href="booking.php"> Booking Page</a><span class="fas fa-arrow-right"></span>  <a href="booked.php"> Booked Page</a></p>
				        </div>	
				    </div>
			    </div>
		</section>
		<!-- End banner Area -->
		<!-- Start about-info Area -->
		<section class="book-info-area section-gap">
			<div class="container">
                <h2 class="judul-book">This is your booking data</h2>
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-4 banner-right">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="data-tab" data-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="true">Booking Form</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">
								<form class="form-wrap" action="pay.php" method="POST" enctype="multipart/form-data">
								<fieldset disabled>
									<p>PERSONAL DATA</p>
									<input type="text" class="form-control" name="name" placeholder="<?php echo $name ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name '">	
									<input type="text" class="form-control" name="address" placeholder="<?php echo $address ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address '">
									<input type="text" class="form-control" name="no" placeholder="<?php echo $no ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number '">
									<label for="Packages">Packages Code</label>
									<select name="kode_pkt" id="kode_pkt" class="form-control">
                                        <option><?php echo $kode_pkt ?></option>
                                    </select>
									<p>HOTELS</p>
									<label class="text-align left" for="to">To</label>
									<select name="to" id="to" class="form-control" required>
										<option><?php echo $to ?></option>
                                    </select>	
									<input type="number" min="1" max="20" class="form-control" name="room" placeholder="<?php echo $room ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Room '" required>
									<label for="arrival">Arrival Date</label>
									<input type="date" class="form-control" name="arrival" value="<?php echo $arrival ?>" required placeholder=" " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Arrival '">
									<label for="leave">Leave Date</label>
									<input type="date" class="form-control" name="leave" value="<?php echo $leave ?>" required placeholder=" " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Leave '">
									<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="<?php echo $adults ?> " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '" required>
									<input type="number" min="0" max="20" class="form-control" name="child" placeholder="<?php echo $child ?> " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '" required>
									<p>FLIGHTS</p>
									<label class="text-align left" for="dari">From - To</label>
									<select name="from" id="from" class="form-control">
										<option><?php echo $from ?></option>
                                    </select>
									<select name="ke" id="ke" class="form-control">
										<option><?php echo $ke ?></option>
                                    </select>
									<input type="date" class="form-control" name="departure" value="<?php echo $departure ?>" required placeholder="Departure " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Departure '">
									<input type="date" class="form-control" name="return"  value="<?php echo $return ?>" required placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
									<p>Children under 5 year old didn't count</p>
									<input type="number" min="1" max="20" class="form-control" name="pass" placeholder="<?php echo $pass ?> " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Passenger '">
									<p>PAY</p>
									<p>Price : <?php echo $total ?></p>
									</fieldset>
									<input type="submit" name="pay" value="Pay" class="primary-btn text-uppercase">
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 info-left">
						<img class="img-fluid" src="../img/booking.jpg" alt="">
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