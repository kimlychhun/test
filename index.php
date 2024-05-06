<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php 
	include "./config.php";
	include "./libraries/db.php";
	include "./libraries/auth.php";

	$page = "home.php";
	$hero = true;
	if(isset($_GET['p'])){
		$p = $_GET['p'];
		switch($p){
			case "shop": 
				$page = "shop.php";
				$hero = false;
				break;
			case "contact":
				$page = "contact.php";
				$hero = false;
				break;	
		}
	}
?>

<!doctype html>
<html lang="en">
<?php include "includes/head.php" ?>
	<body>
		<!-- Start Header/Navigation -->
		<?php include "includes/header.php" ?>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
		<?php 
			if($hero) include "includes/heroSection.php"
		?>	
		<!-- End Hero Section -->

<!-- Home Section -->
		<?php include $page ?>	
<!-- End Home Section -->

		<!-- Start Footer Section -->
		<?php include "includes/footer.php" ?>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
