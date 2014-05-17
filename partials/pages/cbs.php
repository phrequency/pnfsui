<?php
$page = 'CBS3';
require('chrome.php');
chrometop($page);
?>

<div id="cbs3" class="chunk clearLeft">
<h2 class="maintitle"><span>CBS3</span></h2>
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/feed/', array('title' => 'Local','permalink' => 'http://philadelphia.cbslocal.com/')); ?>
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/sports/feed/', array('title' => 'Sports','permalink' => 'http://philadelphia.cbslocal.com/category/sports/')); ?>
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/news/government-politics/', array('title' => 'Politics','permalink' => 'http://philadelphia.cbslocal.com/category/news/government-politics/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/news/business-economy/', array('title' => 'Business','permalink' => 'http://philadelphia.cbslocal.com/category/news/business-economy/feed/')); ?>
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/news/consumer-news/feed/', array('title' => 'Consumer','permalink' => 'http://philadelphia.cbslocal.com/category/news/consumer-news/')); ?>
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/news/health/feed/', array('title' => 'Health','permalink' => 'http://philadelphia.cbslocal.com/category/news/health/')); ?>
</div>
<div class="four chunk clearLeft">
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/news/entertainment/feed/', array('title' => 'Entertainment','permalink' => 'http://philadelphia.cbslocal.com/category/news/entertainment/')); ?>
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/best-of/feed/', array('title' => 'Best of Phila','permalink' => 'http://philadelphia.cbslocal.com/category/best-of/')); ?>
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/blogs-2/feed/', array('title' => 'Blogs','permalink' => 'http://philadelphia.cbslocal.com/category/blogs-2/')); ?>
<?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/category/news/tech/feed/', array('title' => 'Tech','permalink' => 'http://philadelphia.cbslocal.com/category/news/tech/')); ?>

</div>

<?php chromebot(); ?>