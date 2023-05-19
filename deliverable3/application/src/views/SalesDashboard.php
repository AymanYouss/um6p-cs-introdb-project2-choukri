<?php
	if(!isset($_SESSION))
	{
		session_start();
	}


  if (!isset($_SESSION) || $_SESSION["role"] != "sales") {
    include_once '../controllers/redirect.php';
  }
?>

<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sales Dashboard</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
  </head>
  <body>
    
    <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src="../../assets/img/logo/lg.webp" style="width:80%" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#feature">Actions</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#tracking" id="abt" onmouseover="showabt1()" onmouseout="showabt()">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="../controllers/logout.php" class="page-scroll">logout</a>
                    </li>
                    
                  </ul>
                </div>
                
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
      
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section">
    <div class="hide" id="hide">I am shown when someone hovers over the div above.</div>
      <div class="container">
      
        <div class="row align-items-center">
        
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 class="wow fadeInUp" data-wow-delay=".2s">
								Sales Dashboard
							</h1>
              <p class="wow fadeInUp" data-wow-delay=".4s">
                Add, modify, delete rows and entries in the sales table.
              </p>
              <div class="hero-btns">
								<a href="fulldatabaseview.php" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Database Overview</a>
								<a href="#feature" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Edit a Sale</a>
							</div>
            </div>
					</div>
					<div class="col-lg-6">
						<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
							<img src="../../assets/img/logo/mng.jpg" style="width:80%;margin-left:30%" alt="">
						</div>
					</div>
        </div>
			</div>
      
			
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= feature-section start ========================= -->
		<section id="feature" class="feature-section pt-140">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7">
						<div class="section-title text-center mb-30">
							<h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Choose Action</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">You can either add & edit rows, and take a look at the sales table</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon color-1">
								<a style="color:white" href="addrowsales.php" class="lhov"><i class="lni lni-pointer-up"></i></a> 
							</div>
							<div class="content">
								<h3>Add a row</h3>
								<p>You can conveniently fill in all the relevant information to enrich the sales table with valuable data !</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon color-2">
								<a style="color:white" href="editrowssales.php" class="lhov"><i class="lni lni-laptop-phone"></i></a> 
							</div>
							<div class="content">
								<h3>Edit a row</h3>
								<p>You can update the sales table with new information, enabling you to refine any existing row !</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon color-3">
              <a style="color:white" href="salesdatabaseview.php" class="lhov"><i class="lni lni-database"></i></a> 
							</div>
							<div class="content">
								<h3>Take a look</h3>
								<p>You can observe the table to see how is your data going !</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= feature-section end ========================= -->

		
		
    

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="../../assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="../../assets/js/count-up.min.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/main.js"></script>
  </body>
</html>
