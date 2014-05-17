<?php
$page = 'NBC 10';
require('chrome.php');
chrometop($page);
?>

<div class="chunk clearLeft">
<h2 class="maintitle"><span>NBC10</span></h2>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/top-stories/?rss=y&embedThumb=y&summary=y', array('title' => 'Top Stories','permalink' => '#')); ?>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/local/?rss=y&embedThumb=y&summary=y', array('title' => 'Local Beat','permalink' => '#')); ?>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/politics/?rss=y&embedThumb=y&summary=y', array('title' => 'Politics','permalink' => '#')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/sports/?rss=y&embedThumb=y&summary=y', array('title' => 'Sports','permalink' => '#')); ?>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/tech/?rss=y&embedThumb=y&summary=y', array('title' => 'Tech','permalink' => '#')); ?>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/breaking/?rss=y&embedThumb=y&summary=y', array('title' => 'Breaking','permalink' => '#')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/green/?rss=y&embedThumb=y&summary=y', array('title' => 'Green','permalink' => '#')); ?>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/business/?rss=y&embedThumb=y&summary=y', array('title' => 'Business','permalink' => '#')); ?>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/health/Health-227828071.html?summary=y&rss=y&embedThumb=y', array('title' => 'Health','permalink' => '#')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/entertainment/top-stories/?rss=y&embedThumb=y&summary=y', array('title' => 'Top Stories','permalink' => '#')); ?>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/entertainment/entertainment-news/?rss=y&embedThumb=y&summary=y', array('title' => 'Entertainment News','permalink' => '#')); ?>
<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/entertainment/the-scene/?rss=y&embedThumb=y&summary=y', array('title' => 'The Scene','permalink' => '#')); ?>
</div>


<?php chromebot(); ?>