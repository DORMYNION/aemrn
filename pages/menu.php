
	<nav class="mainmenu-area stricky">
		<div class="container">
			<div class="navigation pull-left">
				<div class="nav-header">
					<ul id="menu">
            <li><a href="index.php">Home</a></li>
						<li class="dropdown">
							<a href="about.php">About Us</a>
							<ul class="submenu">
								<li><a href="team.php">Our Team</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="projects.php">Projects</a>
							<ul class="submenu">
								<li><a href="mobile.php">Mobile Clinic</a></li>
								<li><a href="synposium.php">Synposium</a></li>
							</ul>
						</li>
            <li class="dropdown">
              <a href="membership.php">Membership</a>
              <ul class="submenu">
                <li><a href="volunteers.php">Volunteers</a></li>
                <li><a href="donation.php">Donation</a></li>
                <li><a href="intership.php">Intership</a></li>
              </ul>
            </li>
						<li class="dropdown">
							<a href="events.php">Events</a>
							<ul class="submenu">
								<li><a href="news.php">News</a></li>
							</ul>
						</li>
            <li><a href="gallery.php">Gallery</a></li>
					  <li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="nav-footer">
					<button><i class="fa fa-bars"></i></button>
				</div>
			</div>

      <div class="single-header-info">
                <!-- Modal: donate now Starts -->
                <a class="thm-btn" data-toggle="modal" href="#modal-donate-now">Donate Now</a>
                <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog style-one" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Make a Donation</h4>
                      </div>
                      <div class="modal-body">
                      <div class="donation-form-outer">
                    <form action="" method="post">

                          <!--Form Portlet-->
                          <div class="form-portlet">
                            <h3>Donation Amount</h3>

                              <div class="row clearfix">
                                <div class="form-group col-xs-12 clearfix">

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

                                  <div class="form-group col-xs-12">

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

                              <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Donate Now</button></div>

                              </div>
                          </div>

                          <hr>

                          <!--Form Portlet-->
                          <div class="form-portlet">
                            <h3>Online Payment Information</h3>

                              <div class="payment-option-logo"><img alt="" src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/resources/payment-logos.png" class="img-responsive"></div>
                              <br>
                          </div>

                      </form>
                  </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal: donate now Ends -->
      </div>
		</div>
	</nav> <!-- /.mainmenu-area -->
