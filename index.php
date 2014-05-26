<?php require 'chrome.php'; $page = 'Home'; chrometop($page); ?>
		<?php 
		include 'partials/home/top.php';
		// include 'partials/home/quickies.php';	
		// include 'partials/home/weather.php';		
		include 'partials/home/business.php';
		include 'partials/home/law.php';
		// include 'partials/home/sports.php';
		// include 'partials/home/freepress.php';
		// include 'partials/home/schools.php';
		// include 'partials/home/tech.php';
		// include 'partials/home/funnies.php';
		// include 'partials/home/blogs.php';
		// include 'partials/home/realestate.php';
		// include 'partials/home/food.php';
		?>	

<?php chromebot(); ?>