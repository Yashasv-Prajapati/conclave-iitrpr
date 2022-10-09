<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Leadership Summit '22 | IIT Ropar" />
    <meta name="author" content="IIT Ropar" />
    <meta name="keywords" content="Leadership, Summit, IIT Ropar, Conclave" />
    <meta name="language" content="EN" />
    <meta name="subtitle" content="Leadership Summit '22 Official Website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Leadership Summit '22 | IIT Ropar" />
    <meta property="og:description" content="Leadership Summit '22 Official Website" />
    <meta property="og:url" content="https://leadership-summit22.herokuapp.com/" />
    <meta property="og:image" content="images/LOGO.jpeg" />
    <title>Leadership Summit 2022</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="styles/home.css" />
    <link rel="stylesheet" href="styles/animation.css" />
    <link rel="stylesheet" href="styles/bootstrap.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy:ital@0;1&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
      
            <link href="styles/team.css" rel="stylesheet">

    <!-- New Addition FontAwesome Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
		.page-sticky-head-holder {
			position: sticky;
			top: 80px;
			background-color: #eee;
			z-index: 10;
			margin-bottom: 30px;
		}

		.page-sticky-head {
			font-family: 'Montserrat';
			font-size: 16px;
			letter-spacing: 10px;
			color: #0d6c7c;
			font-weight: 600;
			border-bottom: 1px solid #ccc;
			width: 60%;
			margin-left: 7%;
			padding: 20px 30px;
			box-shadow: 0px 8px 6px -6px #ddd;
		}


		@media (max-width: 660px) {
			.page-sticky-head-holder {
				top: 68px;
			}

			.page-sticky-head {
				margin-left: 2%;
				width: 90%;
				letter-spacing: 5px;
				;
			}
		}

		.desc_text {
			font-family: 'Raleway';
			line-height: 30px;
			font-size: 20px;
			margin-top: 30px;
		}

		@media (max-width: 660px) {
			.desc_text {
				line-height: 26px;
				font-size: 16px;
				margin-top: 30px;
			}
		}
	</style>

</head>

<body style="background-color:#eee">
	<?php //include("elem/navbar.php"); ?>
	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="navbar-example2">
        <div class="container-fluid">
            <a class="nav-brand-layout" href="./index.php">Leadership Summit 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav mx-3 nav-tabs" role="tablist" id="mainNav">
                    <li class="nav-item my-3">
                        <a href="index.php#home" class="gradient-box-outline">Home</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#about" class="gradient-box-outline ">About&nbspUs</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#prelude" class="gradient-box-outline">Prelude</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#agendas" class="gradient-box-outline">Agendas</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="schedule.php" class="gradient-box-outline">Schedule</a>
                    </li>
                    <li class="nav-item my-3">
                        <a aria-current="page" href="team.php#team" class="gradient-box-outline gradient-box">Team</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="team.php#contact" class="gradient-box-outline">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    	<!--PATRONS-->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				PATRONS
			</div>
		</div>
		<div class="container" style="margin-top:110px;">
			<div class="row">
				<div class="col-md-3 col-1">
				</div>
				<div class="col-md-3 col-5">
					<div class="our-team">
						<div class="pic">
							<img src='./images/bog.jpeg' alt="">
							<div class='hidden-contact' style="margin-left:22%;">
								<!--<i class="fa fa-envelope" aria-hidden='true'></i><br>pps@iitrpr.ac.in<br>-->
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Dr. K. Radhakrishnan</div>
							<div class='post'>Chairperson, BoG</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-5">
					<div class="our-team">
						<div class="pic">
							<img src='./images/ahuja.jpg' alt="">
							<div class='hidden-contact' style="margin-left:16%;">
								<!--<i class="fa fa-envelope" aria-hidden='true'></i><br>deansa@iitrpr.ac.in<br>-->
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Rajeev Ahuja</div>
							<div class='post'>Director</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-1">
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				MENTORS
			</div>
		</div>
		<div class="container" style="margin-top:110px;">
			<div class="row">
				<div class="col-md-3 col-1">
				</div>
				<div class="col-md-3 col-5">
					<div class="our-team">
						<div class="pic">
							<img src='./images/Dr-Pushpendra-P-Singh.jpeg' alt="">
							<div class='hidden-contact' style="margin-left:22%;">
								<i class="fa fa-envelope" aria-hidden='true'></i><br>pps@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Dr. Pushpendra P. Singh</div>
							<div class='post'>Associate Dean (Research and Development)</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-5">
					<div class="our-team">
						<div class="pic">
							<img src='./images/sc-martha.jpg' alt="">
							<div class='hidden-contact' style="margin-left:16%;">
								<i class="fa fa-envelope" aria-hidden='true'></i><br>deansa@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Dr. Subash Chandra Martha</div>
							<div class='post'>Associate Dean (Student Affairs)</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-1">
				</div>
			</div>
		</div>
	</div>

	<!-- TORCH BEARERS -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				TORCH BEARERS
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/diksha.jpg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2019mcb1216@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Diksha Mittal</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/raghav-verma.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2019meb1284@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Raghav Verma</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/suvansh.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2018ceb1032@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Suvansh Bhargava</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/piyush-pratap-singh.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2017chz0004@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Piyush Pratap Singh</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CORE TEAM -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				CORE TEAM
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-0">
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/prachi.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1048@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Prachi</div>
							<div class='post'>Overall Convener</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/simarpreet.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020bmz0002@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Simarpreet Kaur</div>
							<div class='post'>Content Team Head</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/tiya.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1213@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Tiya Jain</div>
							<div class='post'>Content Team Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/vedant.jpeg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1219@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Vedant Sati</div>
							<div class='post'>Sponsorship Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/sneha.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021mcb1368@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Sneha Shah</div>
							<div class='post'>Website and Design Team Head</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-2 blank-col">
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/himanshu.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020mmb1346@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Himanshu Parganiha</div>
							<div class='post'>PR Team Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/jashandeep.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1286@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Jashandeep Singh</div>
							<div class='post'>Hospitality Team Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/yatin.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020meb1335@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Yatin</div>
							<div class='post'>Photography Team Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/rohan.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021eeb1313@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Rohan Nijhawan</div>
							<div class='post'>Moderators' Head</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	<!-- WEB DEVELOPERS -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				WEB DEVELOPERS
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-0">
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/arnav-kharbanda.jpeg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021csb1072@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Arnav Kharbanda</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/arpit.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021eeb1156@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Arpit Kumar Verma</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-12">
					<div class="our-team">
						<div class="pic">
							<img src='./images/yashasav.jpg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021csb1143@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Yashasav Prajapati</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
				</div>
			</div>
		</div>
	</div>
	
	<!-- ORGANIZING TEAM -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				ORGAINIZING TEAM
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/chitrankar.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020mmb1343@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Chitrankar</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/navneet.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>$mail<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Navneet</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/rahul.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020mcb1244@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Rahul</div>							
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/manan.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021eeb1186@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Manan Dangwal</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/sagarika.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>sagarika.20mmz0006@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Sagarika Bhattacharjee</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/ayushi.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020csb1080@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Ayushi Patel</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/chinmay.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020ceb1008@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Chinmay Agrawal</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/armaan.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020csb1039@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Armaan Sharma</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/harshdeep.jpeg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021mcb1044@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Harshdeep</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/abhishek.jpg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1257@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Abhishek Samyal</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/sacchidanad.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1257@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Sacchidanad Kushwaha</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/kirti.jpg' alt="">
							<div class='hidden-contact'>
								<!--<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1257@iitrpr.ac.in<br>-->
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Kirti Singh</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
    <section id="contact" style="margin-top:50px;">
        <div class="d-flex flex-column h-100">
            <div class="hero text-dark py-2 flex-grow-1">
                <div class="container-fluid">
                    <div class="row my-5">
                        <div class="col-md-12 team-head-ad">
                            <h1><i class="fa fa-home"></i> Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER -->
            
            <footer class="w-100 py-4 flex-shrink-0">
                <div class="container py-4">
                    <div class="row gy-4 gx-5">
                        <div class="col-md-3">
                            <h5 class="text-dark mb-3"><i class="fa fa-map-marker"></i> Address</h5>
                            <p>Main Campus <br>
                                Indian Institute of Technology Ropar <br>
                                Rupnagar <br>
                                Punjab, INDIA 140001
                            </p>
                        </div>

                        <div class="col-md-3">
                            <h5 class="text-dark mb-3"><i class="fa fa-phone"></i> Call</h5>
                            <ul class="list-unstyled text-muted">
                                <li> Jashandeep Singh <a href="tel:+918708285634"
                                        style="text-decoration:none;">+91-8708-285634</a></li>
                                        <li> Himanshu <a style="text-decoration:none;"
                                        href="tel:+918109669687">+91-8109-669687</a></li>
                                <li> Prachi <a href="tel:+918527997951"
                                        style="text-decoration:none;">+91-8527-997951</a></li>
                                        
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <h5 class="text-dark mb-3"><i class="fa fa-envelope"></i> Mail</h5>
                            <p class="small text-dark small-line-height"> <a style="text-decoration:none;"
                                    href="mailto:leadership.summit@iitrpr.ac.in"> leadership.summit@iitrpr.ac.in</a></p>
                        </div>
                         <div class="col-md-3">
                            <h5 class="text-dark mb-3"><i class="fa fa-link" aria-hidden="true"></i> Quick Links</h5>
                            <p class="small text-dark small-line-height"> <a style="text-decoration:none;" target="_blank"
                                    href="https://www.iitrpr.ac.in"> Official Website</a></p>
                            <p class="small text-dark small-line-height"> <a style="text-decoration:none;" target="_blank"
                                    href="https://www.iitrpr.ac.in/student-council/"> Student Council</a></p>
                            <p class="small text-dark small-line-height"> <a style="text-decoration:none;" target="_blank"
                                    href="https://www.iitrpr.ac.in/ismp"> ISMP</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

</body>

</html>
