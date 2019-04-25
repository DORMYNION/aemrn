<?php $app = require __DIR__.'/bootstrap.php';?>
<?php $page_title = "Donation"; ?>
<?php include LOCAL_PATH_PAGES.'/header.php'; ?>

<section class="inner-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sec-title colored text-center">
				<h2>Donation</h2>
				<ul class="breadcumb">
					<li><a href="#">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><span>Donation</span></li>
				</ul>
				<span class="decor"><span class="inner"></span></span>
			</div>
		</div>
	</div>
</section>

<section class="sec-padding donation-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<h2 class="text-thm">You can support us through Donations</h2><hr>
				<p><strong>Note:</strong> Donations to AEMRN is in Switzerland legally tax exempted as per <a href="http://aemrnetwork.ch/images/News/page-0.jpg">Steuerbefreiung</a> Verfügung</p>
					<ul class="text-justify">
						<li>Membership of Assosciation of Afro-European Medical and Research Network with a minimun yearly membership fee of USD 50.00</li>
						<li>Financial donation</li>
						<li>Donation of material resources in form of medical and diagnostic instruments</li>
						<li>Hospital instruments (hospital beds, cupboards, trolleys, surgical instruments etc.</li>
						<li>Computer, laptops and desktops, printers, photocopiers, stationary</li>
						<li>Medications and food: Analgesics, antimalarials, antibiotics etc.</li>
						<li>School materials and furniture</li>
						<li>Donation of new and second hand clothes, toys, shoes, blankets</li>
						<li>Forms of transportation (camping vans, jeeps, trucks, motorbikes, bicycles, etc) to facilitate operation of our mobile clinics and field work</li>
						<li>For financial donation to our mobile clinics click here.</li>
						<li>Through active voluntary services at any of our projects site for short, medium and log term work in diverse fields such as research, medical, teaching in Kindergarten, schools and universities, counselling, other humanitarian and community oriented services</li>
					</ul><br><br><br>
					<hr>

					<!--Form Portlet-->
					<div class="form-portlet">
						<h3>Online Payment Information</h3>

						<p><strong>Kontonummer:</strong> 	85-527095-2</p>
						<p><strong>IBAN elektronisch:</strong> 	CH2809000000855270952</p>
						<p><strong>IBAN Papierform:</strong> 	IBAN CH28 0900 0000 8552 7095 2</p>
						<p><strong>SWIFT Code / BIC:</strong> 	POFICHBEXXX</p>
						<p><strong>Empfaengerbank:</strong> 	Swiss Post, PostFinance, Nordring 8, CH-3030 Bern</p>
						<p><strong>Clearing Nummer:</strong> 	09000</p>
						<br>
						<div class="payment-option-logo"><img alt="" src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/resources/payment-logos.png" class="img-responsive"></div>
					</div>
			</div>
			<div class="col-md-8">
			<h2 class="text-thm">Make a Donation</h2><br>
			<hr>
			<div class="donation-form-outer">
				<form action="" method="post">

					<!--Form Portlet-->
					<div class="form-portlet">
						<h3>Donation Amount</h3>

						<div class="row clearfix">
							<div class="form-group col-lg-7 col-md-12 col-xs-12 clearfix">

								<div class="radio-select">
									<input type="radio" id="amount-1" name="sel-amount">
									<label for="amount-1">$10</label>
								</div>

								<div class="radio-select">
									<input type="radio" checked="" id="amount-2" name="sel-amount">
									<label for="amount-2">$25</label>
								</div>

								<div class="radio-select">
									<input type="radio" id="amount-3" name="sel-amount">
									<label for="amount-3">$50</label>
								</div>

								<div class="radio-select">
									<input type="radio" id="amount-4" name="sel-amount">
									<label for="amount-4">$100</label>
								</div>

								<div class="radio-select">
									<input type="radio" id="amount-5" name="sel-amount">
									<label for="amount-5">$150</label>
								</div>

								<div class="radio-select">
									<input type="radio" id="amount-6" name="sel-amount">
									<label for="amount-6">$200</label>
								</div>

								<div class="radio-select">
									OR
								</div>

							</div>

							<div class="form-group col-lg-5 col-md-8 col-xs-12">

								<input type="text" placeholder="Other Amount" value="" name="other-amount">

							</div>

						</div>
					</div>

					<hr>

					<!--Form Portlet-->
					<div class="form-portlet">
						<h3>Billing Information</h3>

						<div class="row clearfix">

							<div class="form-group col-lg-6 col-md-6 col-xs-12">
								<div class="field-label">Card Number <span class="required">*</span></div>
								<input type="text" required="" placeholder="Card Number" value="" name="name">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-xs-12">
								<div class="field-label">Security Code (CVC) <span class="required">*</span></div>
								<input type="text" required="" placeholder="Security Code" value="" name="name">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-xs-12">
								<div class="field-label">Name <span class="required">*</span></div>
								<input type="text" required="" placeholder="First Name" value="" name="name">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-xs-12">
								<div class="field-label">Email <span class="required">*</span></div>
								<input type="email" required="" placeholder="Email" value="" name="name">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-xs-12">
								<div class="field-label">Phone <span class="required">*</span></div>
								<input type="text" required="" placeholder="Phone" value="" name="name">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-xs-12">
								<div class="field-label">Address <span class="required">*</span></div>
								<input type="text" required="" placeholder="Address 1" value="" name="name">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-xs-12">
								<div class="field-label">City <span class="required">*</span></div>
								<select>
									<option>City</option>
									<option>City Name</option>
									<option>City Other</option>
								</select>
							</div>

							<div class="form-group col-lg-6 col-md-6 col-xs-12">
								<div class="field-label">Zip / Postal Code <span class="required">*</span></div>
								<input type="text" required="" placeholder="Zip Code" value="" name="name">
							</div>

							<hr>

							<div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Submit Now</button></div>

						</div>
					</div>



				</form>
			</div>

			</div>
		</div>
	</div>
</section>


<?php include LOCAL_PATH_PAGES.'/callout.php'; ?>

<?php include LOCAL_PATH_PAGES.'/footer.php'; ?>
