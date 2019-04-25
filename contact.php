<?php $app = require __DIR__.'/bootstrap.php';?>
<?php $page_title = "Contact Us"; ?>
<?php include LOCAL_PATH_PAGES.'/header.php'; ?>

	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Contact</h2>
					<ul class="breadcumb">
						<li><a href="#">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Contact</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>


	<section class="contact-content sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Take Contact With Us</h2>
			</div>
			<div class="row">
				<div class="col-md-8">
					<h2>Contact Form</h2>
					<form action="#" class="contact-form row" id="contact-page-contact-form">
						<div class="col-md-6">
							<input type="text" name="name" placeholder="Name">
							<input type="text" name="email" placeholder="Email">
							<input type="text" name="phone" placeholder="Phone">

						</div>
						<div class="col-md-6">
							<textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
						</div>
						<div class="col-md-12"><button class="thm-btn" type="submit">Send</button></div>
					</form>
				</div>
				<div class="col-md-4">
					<h2>Address</h2>
					<ul class="contact-info">
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Address</h4>
								<p>Afro-European Medical and Research Network (AEMRN), Neuengasse 36,<br> 3011 Bern, Switzerland</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Phone</h4>
								<p>+41 31 311 4084, +41 31 535 4302, <br>+41 78 835 0392, +41 76 325 8852 </p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Email</h4>
								<p>	contact@aemrnetwork.ch</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<?php include LOCAL_PATH_PAGES.'/callout.php'; ?>

<?php include LOCAL_PATH_PAGES.'/footer.php'; ?>
