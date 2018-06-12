<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>White Volunteers</title>
		<style>
		.button {
			background-color: inherit;
			border: 2px solid;
			border-color: #AE2C21;
			color:#AE2C21;
			padding: 15px 32px;
			text-align: center;
			font-size: 16px;
			margin: 4px 2px;
			}
		.button:hover {
			background-color: #AE2C21;
			color: white;
			}
		.button1 {
			background-color: inherit;
			border-color: white;
			color:white;
			}
		.button1:hover {
			background-color:white;
			color:#AE2C21;
		}
		#slideshow {
			margin-top: 90px;
			width:100%;
			height:100%;
			
		}
		#map {
			position:center;	
			height: 500px;  /* The height is 400 pixels */
			width: 100%;  /* The width is the width of the web page */
        }
		.container-fluid
		{
			padding:0px 0px 0px 0px;
			width:100%;
			height:100%;	
		}
		body
		{
			font-size: 18px;
			font-family: Arial,Helvetica,sans-serif;
		}
		.thumbnail{
			border: none;
			box-shadow: none;
		}
		p{
			font-size:16px;
		}
		h1{
			line-height:2em;
		}
		h3{
			line-height: 1.67em;
		}
		h1,h2,h3{
			font-family: Arial,Helvetica,sans-serif;
		}
		.parallax {
			background-image: url("home.webp");
			/* Set a specific height */
			min-height: 500px; 
			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			padding:100px 100px 100px 100px;
			background-color:#eee;
		}
		footer{
			padding: 10px 0;
			background-color: #eee;
			color: black;
			text-align: center;
			bottom: 0;
			width: 100%;
		}
		</style>
    </head>
    <body>
	<?php include 'header.php';?>
	<div id="home" class="container-fluid" align="center" style="color:black;background-color:white;padding:100px 80px 50px 60px" >
		White Volunteers
	</div>
	<div class="container-fluid" style="background-color:#eee;"><br><BR><br><BR>
		<div class="container">
			<div class="parallax"></div>
		</div>
	</div>
	<div id="about" class="container-fluid" style="height:100%;background-color:#eee;" align="center">
		<br>
		<h1 style="color:#AE2C21">White Volunteers</h1>
		<h3>Working Towards a Brighter Future</h3>
		<br>	
		<p style="width:60%;align:center;font-family: Arial,Helvetica,sans-serif;line-height: 1.875em;">At White Volunteers, we're supporting initiatives to serve the people who need them most. We collect the clothes, books, money, toys, medicines, shoes and other urban wastage to orphan children, poor and needy people to protect their dignity. Please join our efforts to make a measurable difference in the lives of others.
		</p>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-sm-6" align="left">
					<h3 style="color:#AE2C21">Vision | Mission</h3>
					<br>	
					<p style="width:60%;align:center;font-family: Arial,Helvetica,sans-serif;line-height: 1.875em;align:left;">
					<li> Service and Dignity</li>
					<li> Equal respect and equity for all</li>
					<li> Free nutrition for all school children</li>
					<li> Free clothing for all</li>
					</p>
					<br>
					<br>
				</div>
				<div class="col-sm-6" align="left">
					<h3 style="color:#AE2C21">History</h3>
					<br>	
					<p style="width:100%;align:center;font-family: Arial,Helvetica,sans-serif;line-height: 1.875em;">
					Wayback in the 2016 Shekhar Maraveni, a young sub-inspector for Indian Armed Forces, observed the Tribal and poor people who doesn't have clothing and food. Shekhar Maraveni  was upset when he observed the people who doesn't have basic needs. As part of his profession, he travelled around the India and he started White Volunteers Foundation to serve the nation.
					</p>
					<br>
					<br>
				</div>
			</div>
		</div>
		<button class="button" style="font-family: Arial,Helvetica,sans-serif;">Get in Touch
		</button>
		<br>
		<BR>
		<br>
		<br>
	</div>
	<h1 class="text-center" style="margin-top: 100px;font-weight: bolder;letter-spacing: 3px;">Photo Gallery</h1>
	<div id="gallery" class="container-fluid" id="slideshow">
		<div class="row">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel carousel-fullscreen slide" data-ride="carousel" data-pause="null">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img class="img-responsive" src="https://source.unsplash.com//n7n-nkadHRM/2560x1440"  alt="photo of golden gate bridge">
						</div>
						<div class="item">
							<img class="img-responsive" src="https://source.unsplash.com/9M54sNTIa-4/2560x1440" alt="photo of golden gate bridge">
						</div>
						<div class="item">
							<img class="img-responsive" src="https://source.unsplash.com/FD92qXMJN0E/2560x1440" alt="photo of golden gate bridge">
						</div>
						<div class="item">
							<img class="img-responsive" src="https://source.unsplash.com/Plt0vHDRb9U/2560x1440" alt="photo of golden gate bridge">
						</div>
					</div>
            <!--  left and right controls  -->
					<a class="carousel-control left"  data-slide="prev" href="#myCarousel">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control right"  data-slide="next" href="#myCarousel">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
    </div>

	<div id="activities" class="container-fluid" style="height:100%;background-color:#AE2C21;color:white" align="center">
		<br>
		<BR>
		<br>
		<h1>Activities</h1>
		<br>
		<p>Making A Difference</p>
		<br>
		<br>
		<br>
		<br>
		<BR>
		<div class="container">
			<div class="row" >
				<div class="col-md-4 col-sm-6"">
					<img src="1.webp" class="img-circle" width="210" height="210" align="center"> 
						<div class="caption">
							<p>
								<br>
								<br>
								Education & Outreach
							</p>
							<p>
								<br>
								Helping The Community
							</p>
							<br>
							<br>
							<button type="button" class="button button1" style="font-family: Arial,Helvetica,sans-serif;">Get in Touch</button>
						</div>
				</div>
				<div class="col-md-4 col-sm-6"">
					<img src="2.webp" class="img-circle" width="210" height="210" align="center"> 
						<div class="caption">
							<div class="caption">
								<p>
									<br>	
									<br>
									Support Services
								</p>
								<p>
									<br>
									One Step at a Time
								</p>
								<br>
								<br>
								<button type="button" class="button button1" style="font-family: Arial,Helvetica,sans-serif;">Get in Touch</button>
							</div>
						</div>
				</div>
				<div class="col-md-4 col-sm-6"">
					<img src="3.webp" class="img-circle" width="210" height="210" align="center"> 
						<div class="caption">
							<div class="caption">
								<p>
									<br>
									<br>
									Community Development
								</p>
								<p>
									<br>
									Reinforcing our Commitment
								</p>
								<br>
								<br>
								<button type="button"  class="button button1" style="font-family: Arial,Helvetica,sans-serif;">Get in Touch</button>
							</div>
						</div>
				</div>
			</div>
		</div>
		<br>	
		<br>
		<br>
		<br>
		<br>
	</div>
	<div id="getinvolved" class="container-fluid" style="height:100%;background-color:#eee;color:#AE2C21" align="center">
		<br>
		<BR>
		<br>
		<h1>Ways to Help</h1>
		<br>
		<p>Make Your Mark</p>
		<br>
		<br>
		<br>
		<br>
		<BR>
		<div class="container">
			<div class="row" >
				<div class="col-md-4 col-sm-6"">
					<img src="4.webp" class="img-circle" width="210" height="210" align="center"> 
						<div class="caption">
							<p>
								<br>
								<br>
								Volunteer Your Time	
							</p>
							<p style="color:black;">
								<br>
								Show Your Support
							</p>
							<br>
							<br>
							<button type="button"  class="button" style="font-family: Arial,Helvetica,sans-serif;">Get in Touch</button>
						</div>
				</div>
				<div class="col-md-4 col-sm-6"">
					<img src="5.webp" class="img-circle" width="210" height="210" align="center"> 
						<div class="caption">
							<div class="caption">
								<p>
									<br>	
									<br>
									Partner with Us
								</p>
								<p style="color:black;">
									<br>
									Help Us Soar
								</p>
								<br>
								<br>
								<button type="button"  class="button" style="font-family: Arial,Helvetica,sans-serif;">Get in Touch</button>
							</div>
						</div>
				</div>
				<div class="col-md-4 col-sm-6"">
					<img src="6.webp" class="img-circle" width="210" height="210" align="center"> 
						<div class="caption">
							<div class="caption">
								<p>
									<br>
									<br>
									Make a Donation
								</p>
								<p style="color:black;">
									<br>
									Make A True Change
								</p>
								<br>
								<br>
								<button type="button"  class="button" style="font-family: Arial,Helvetica,sans-serif;">Get in Touch</button>
							</div>
						</div>
				</div>
			</div>
		</div>
		<br>	
		<br>
		<br>
		<br>
		<br>
	</div>
	<div id="contact" class="container-fluid" style="background-color:#AE2C21;color:white" align="left" hspace="1px">
		<br>
		<BR>
		<br>
		<br>
		<div class="col-md-6">
		<h1 align="center">Contact White Volunteers<h1>
		<p align="center">Address: 10-128, Saidharani Colony, Nagaram
		<br>Keesara Mandal, Ranga Reddy District.
		<br>Telangana 500083, India
		<br>7587727999,6302904943</p>
		</div>
		<iframe style="padding:5%" width="100%" height="600px" align="center" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;q=10-128%2C%20Saidharani%20Colony%2C%20Nagaram+(White%20Volunteers%20Orphanage)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google map generator</a></iframe>
		<br><BR>
		
	</div>
	<div class="container-fluid" style="background-color:white;color:black" align="left" hspace="1px">
		<div class="col-md-6">
		<div class="container" id="subscribe" style="padding:150px 150px;">
		<p>Subscribe</p>
		<p>Stay up to date</p>
		<input type="text">
		<br><br>
		<button class="button" style="font-family: Arial,Helvetica,sans-serif;width:100%;background-color:#AE2C21;color:white;">Submit
		</button>
		<BR>
		</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>