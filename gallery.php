<?php

	include 'part/header.php';

?>


	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Gallery</h2>
					<ul class="breadcumb">
						<li><a href="#">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Gallery Style Two</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>

<?php /*
    <!--Gallery Section-->
    <section class="gallery-section full-width pb_2">
    	<div class="auto-container">

            <!--Filter-->
            <div class="filters">
            	<ul class="filter-tabs style-one clearfix anim-3-all">
                    <li class="filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".child">Child</li>
                    <li class="filter" data-role="button" data-filter=".charity">Charity</li>
                    <li class="filter" data-role="button" data-filter=".sponsorship">Sponsorship</li>
                    <li class="filter" data-role="button" data-filter=".volunteering">Volunteering</li>
                </ul>
            </div>

        </div>

        <div class="images-container">
            <div class="filter-list clearfix">

                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s1.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s1.jpg" alt=""></a></figure>
                        <a href="img/gallery/s1.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s2.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s2.jpg" alt=""></a></figure>
                        <a href="img/gallery/s2.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s3.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s3.jpg" alt=""></a></figure>
                        <a href="img/gallery/s3.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s4.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s4.jpg" alt=""></a></figure>
                        <a href="img/gallery/s4.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s5.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s5.jpg" alt=""></a></figure>
                        <a href="img/gallery/s5.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s6.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s6.jpg" alt=""></a></figure>
                        <a href="img/gallery/s6.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s7.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s7.jpg" alt=""></a></figure>
                        <a href="img/gallery/s7.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s8.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s8.jpg" alt=""></a></figure>
                        <a href="img/gallery/s8.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s9.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s9.jpg" alt=""></a></figure>
                        <a href="img/gallery/s9.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s10.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s10.jpg" alt=""></a></figure>
                        <a href="img/gallery/s10.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s11.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s11.jpg" alt=""></a></figure>
                        <a href="img/gallery/s11.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s12.jpg" class="lightbox-image"><img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/gallery/s12.jpg" alt=""></a></figure>
                        <a href="img/gallery/s12.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
		*/ ?>


		<h1>Photo Gallery</h1>

		<p class="breadcrumb"><a href="/">home</a> &gt; gallery</p>

		<?php if(count($categories_array)<=0){?>
		<p>There are no photo categories, create one or more categories before uploading photos</p>
		<?php } ?>


		<?php if(count($categories_array)>0){?>


		<div>

			<?php foreach($categories_array as $photo_category=>$photos_array){?>

		    	<?php
				$category_thumbnail = $gallery_url."/layout/pixel.gif";
				if(file_exists('files/'.$photo_category.'/thumbnail.jpg')){
					$category_thumbnail = $gallery_url.'/'.rawurlencode($photo_category).'.jpg';
				}

				$category_url = $gallery_url.'/'.rawurlencode($photo_category);
				?>

		  		<span class="category_thumbnail_span" style="width:<?php echo $settings_thumbnail_width;?>px; height:<?php echo $settings_thumbnail_height+20;?>px;">
		        <a class="category_thumbnail_image" href="<?php echo $category_url;?>" style="width:<?php echo $settings_thumbnail_width;?>px; height:<?php echo $settings_thumbnail_height;?>px; background-image:url('<?php echo $gallery_url;?>/layout/lens_48x48.png');" title="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>">
		        <img src="<?php echo $category_thumbnail;?>" width="<?php echo $settings_thumbnail_width;?>" height="<?php echo $settings_thumbnail_height;?>" alt="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>" />
		        </a>
		        <a class="category_thumbnail_title" href="<?php echo $category_url;?>" title="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>">
		        <?php echo htmlentities(str_replace('-',' ', truncate_by_letters($photo_category, 16, '..')), ENT_QUOTES, "UTF-8");?> (<?php echo count($photos_array);?>)
		        </a>
		        </span>


			<?php } ?>

		</div><!-- end of categories container -->

		<?php } ?>


<?php include LOCAL_PATH_PAGES.'/footer.php'; ?>
