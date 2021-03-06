<?php $app = require __DIR__.'/bootstrap.php';?>
<?php $page_title = "Membership"; ?>
<?php include LOCAL_PATH_PAGES.'/header.php'; ?>

<section class="inner-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sec-title colored text-center">
				<h2>Membership</h2>
				<ul class="breadcumb">
					<li><a href="#">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><span>Membership</span></li>
				</ul>
				<span class="decor"><span class="inner"></span></span>
			</div>
		</div>
	</div>
</section>

<section class="contact-content sec-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center">Membership Form</h2>
        <form action="#" class="contact-form row" id="contact-page-contact-form">
          <div class="col-md-6">
            <input type="text" name="name" placeholder="First Name">
          </div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Last Name">
          </div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Title">
          </div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Company/Organisation">
          </div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Department">
          </div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Position">
          </div>
          <div class="col-md-6">
            <textarea name="name" placeholder="Postal Address"></textarea>
          </div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="City">
            <input type="text" name="name" placeholder="Postal Code">
            <input type="text" name="name" placeholder="Country">
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Home Phone">
          </div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Work Phone">
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Mobile Phone">
          </div>
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Email">
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6">
            <textarea name="name" placeholder="Research and Scientific Interests: "></textarea>
          </div>
          <div class="col-md-6">
            <textarea name="name" placeholder="Reason/Remark for wishing to be Member and or Volunteer skilled participant of AEMRN programmes"></textarea>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 form-inline">
            <p>I would like to support AEMRN</p>
            <label class="checkbox" style="	margin-left: 20px">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> Finacially
            </label>
            <label class="checkbox" style="	margin-left: 20px">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> With Material Donations
            </label>
            <label class="checkbox" style="	margin-left: 20px">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> By Volunteering
            </label>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12"><button class="thm-btn" type="submit">Submit</button></div>
        </form>
      </div>
    </div>
  </div>
</section>



<?php include LOCAL_PATH_PAGES.'/callout.php'; ?>

<?php include LOCAL_PATH_PAGES.'/footer.php'; ?>
