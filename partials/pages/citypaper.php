<?php
$page = 'City Paper';
require('chrome.php');
chrometop($page);
?>

<div class="chunk clearLeft">
<h2 class="maintitle"><span>Philadelphia City Paper</span></h2>
<?php echo newsblocks::listing('http://podcast.citypaper.net/rss.php?type=section&sid=1', array('title' => 'Current Issue ','permalink' => 'http://podcast.citypaper.net/rss.php?type=section&sid=1')); ?>
<?php echo newsblocks::listing('http://feeds2.feedburner.com/citypaper/NWfg', array('title' => 'Clog','permalink' => 'http://feeds2.feedburner.com/citypaper/NWfg')); ?>
<?php echo newsblocks::listing('http://citypaper.net/blogs/mealticket/feed/', array('title' => 'Meal Ticket','permalink' => 'http://citypaper.net/blogs/mealticket/feed/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://citypaper.net/blogs/criticalmass/feed/', array('title' => 'Critical Mass','permalink' => 'http://citypaper.net/blogs/criticalmass/feed/')); ?>
<?php echo newsblocks::listing('http://podcast.citypaper.net/rss.php?type=section&sid=8', array('title' => 'Food','permalink' => 'http://podcast.citypaper.net/rss.php?type=section&sid=8')); ?>
<?php echo newsblocks::listing('http://citypaper.net/rss/blogs.php', array('title' => 'Blogs','permalink' => 'http://citypaper.net/rss/blogs.php')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://citypaper.net/rss.php?type=section&sid=2', array('title' => 'Opinion','permalink' => 'http://citypaper.net/rss.php?type=section&sid=2')); ?>
<?php echo newsblocks::listing('http://citypaper.net/rss.php?type=section&sid=6', array('title' => 'Music','permalink' => 'http://citypaper.net/rss.php?type=section&sid=6')); ?>
<?php echo newsblocks::listing('http://citypaper.net/rss.php?type=section&sid=7', array('title' => 'Movies','permalink' => 'http://citypaper.net/rss.php?type=section&sid=7')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://citypaper.net/rss.php?type=section&sid=26', array('title' => 'Cover Story','permalink' => 'http://citypaper.net/rss.php?type=section&sid=26')); ?>
<?php echo newsblocks::listing('http://citypaper.net/rss.php?type=section&sid=4', array('title' => 'Agenda','permalink' => 'http://citypaper.net/rss.php?type=section&sid=4')); ?>
<?php echo newsblocks::listing('http://askadelphia.citypaper.net/index.rss', array('title' => 'Askadelphia','permalink' => 'http://askadelphia.citypaper.net/index.rss')); ?>
</div>

<?php chromebot(); ?>