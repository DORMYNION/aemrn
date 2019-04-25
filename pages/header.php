<?php
	include LOCAL_PATH_CONFIG.'/system_header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php if(isset($page_description)){echo $page_description;} else {echo $settings_page_description;}?>"/>

	<title><?php if(isset($page_title)){echo $page_title;} else {echo $settings_page_title;}?> | Together we can make it</title>
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php echo RELATIVE_PATH_ASSET_CSS;?>/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo RELATIVE_PATH_ASSET_CSS;?>/responsive.css">
</head>

<body>
<?php /*
	<section class="top-bar">
		<div class="container">

			<div class="left-text pull-left">
				<p><span>Support Us :</span> contact@aemrnetwork.ch</p>
			</div> <!-- /.left-text -->

			<div class="social-icons pull-right">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				</ul>
			</div> <!-- /.social-icons -->
		</div>
	</section> <!-- /.top-bar -->
*/ ?>

	<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="index.php">
					<img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/resources/logo.png" alt="AEMRN Logo" style="height: 75px; width: 150px;"/>
				</a>
			</div>
			<div class="header-right-info pull-right clearfix">
				<div class="single-header-info">
					<div class="content">
						<h2 style="margin-top:30px">Afro-European Medical and Research Network</h2>
					</div>
				</div>
				<div class="single-header-info">
					<div class="content">
						<img src="<?php echo RELATIVE_PATH_ASSET_IMG;?>/resources/index.gif" alt="">
					</div>
				</div>
			</div>
		</div>
	</header> <!-- /.header -->

	<?php if(isset($_REQUEST['message'])){?>
				<?php
		$url_message_type = $_REQUEST['message_type'];
		if($url_message_type!="success" and $url_message_type!="error"){
			$url_message_type = "";
		}
		//
		$url_message = urldecode($_GET['message']);
		$url_message = htmlentities($_GET['message'],ENT_QUOTES,"UTF-8");
		?>
					<div class="message_<?php echo $url_message_type;?>">
					<?php echo $url_message;?>
					</div>
	<?php }?>


<?php include 'menu.php'; ?>
