<?php
$page = 'Food';
require('chrome.php');
chrometop($page);
?>

<h2 class="page-title"><span>Food</span></h2>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://feeds2.feedburner.com/mcduffwine', array('title' => 'McDuff\'s Food & Wine Trail','permalink' => 'http://mcduffwine.blogspot.com/')); ?>
<?php echo newsblocks::listing('http://feeds.feedburner.com/blogspot/VyNe', array('title' => 'Mac and Cheese Review','permalink' => 'http://macandcheesereview.blogspot.com/')); ?>
<?php echo newsblocks::listing('http://philadelphia.grubstreet.com/index.xml', array('title' => 'Phila Grubstreet','permalink' => 'http://philadelphia.grubstreet.com/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://citypaper.net/blogs/mealticket/feed/', array('title' => 'Meal Ticket','permalink' => 'http://citypaper.net/blogs/mealticket/')); ?>
<?php echo newsblocks::listing('http://www.philly.com/philly_entertainment_dining.rss', array('title' => 'Philly.com - Food','permalink' => 'http://www.philly.com/philly/restaurants/')); ?>
<?php echo newsblocks::listing('http://www.phoodie.info/feed/', array('title' => 'Phoodie','permalink' => 'http://www.phoodie.info/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://feeds.feedburner.com/TwoGuysOnBeer', array('title' => 'Two Guys on Beer','permalink' => 'http://twoguysonbeer.com/')); ?>
<?php echo newsblocks::listing('http://feeds.feedburner.com/mainlinedine', array('title' => 'Main Line Dine','permalink' => 'http://mainlinedine.com/')); ?>
<?php echo newsblocks::listing('http://frieswiththatshake.net/?feed=rss2', array('title' => 'frieswiththatshake','permalink' => 'http://www.fwts.net/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://www.foodaphilia.com/feeds/posts/default', array('title' => 'foodaphilia','permalink' => 'http://www.foodaphilia.com/')); ?>
<?php echo newsblocks::listing('http://feeds2.feedburner.com/FoodInJars', array('title' => 'food in jars','permalink' => 'http://www.foodinjars.com/')); ?>
<?php echo newsblocks::listing('http://openchefame.com/feed/', array('title' => 'openchefame','permalink' => 'http://openchefame.com/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://www.betweenthebreadblog.com/posts/feed', array('title' => 'betweenthebreadblog','permalink' => 'http://www.betweenthebreadblog.com/')); ?>
<?php echo newsblocks::listing('http://feeds2.feedburner.com/unbreaded', array('title' => 'unbreaded','permalink' => 'http://unbreaded.com/')); ?>
<?php echo newsblocks::listing('http://feeds.feedburner.com/beerlass/iwPs', array('title' => 'Beer Lass','permalink' => 'http://www.beerlass.com/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://rpscityleague.com/feed/', array('title' => 'Rock paper Scissors League','permalink' => 'http://rpscityleague.com')); ?>
<?php echo newsblocks::listingorig('http://straightfromthefarm.net/feed/', array('title' => 'Straight from the Farm','permalink' => 'http://straightfromthefarm.net/')); ?>
<?php echo newsblocks::listing('http://farmtophilly.com/index.php/site/rss_2.0/', array('title' => 'Farm to Philly','permalink' => 'http://farmtophilly.com/')); ?>
</div>





<?php chromebot(); ?>