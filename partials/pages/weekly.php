<?php
$page = 'Phila Weekly';
require('chrome.php');
chrometop($page);
?>

<div class="chunk clearLeft">
<h2 class="maintitle"><span>Philadelphia Weekly</span></h2>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PhillyWeekly', array('title' => 'Main News','permalink' => 'http://feeds2.feedburner.com/PhillyWeekly')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-NewsOpinion', array('title' => 'News & Opinion','permalink' => 'http://feeds2.feedburner.com/PW-NewsOpinion')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-Events', array('title' => 'Events','permalink' => 'http://feeds2.feedburner.com/PW-Events')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-Music', array('title' => 'Music','permalink' => 'http://feeds2.feedburner.com/PW-Music')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-Food', array('title' => 'Food','permalink' => 'http://feeds2.feedburner.com/PW-Food')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-Drink', array('title' => 'Drink','permalink' => 'http://feeds2.feedburner.com/PW-Drink')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-ArtsCulture', array('title' => 'Arts & Culture ','permalink' => 'http://feeds2.feedburner.com/PW-ArtsCulture')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-Screen', array('title' => 'Screen','permalink' => 'http://feeds2.feedburner.com/PW-Screen')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-Multimedia', array('title' => 'Multimedia','permalink' => 'http://feeds2.feedburner.com/PW-Multimedia')); ?>
</div>
<div class="four chunk clearLeft">
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PW-RealEstate', array('title' => 'Real Estate news','permalink' => 'http://feeds2.feedburner.com/PW-RealEstate')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PWBlogs-Trouble', array('title' => 'The Trouble With Spikol','permalink' => 'http://feeds2.feedburner.com/PWBlogs-Trouble')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PWBlogs-Style', array('title' => 'PW Style ','permalink' => 'http://feeds2.feedburner.com/PWBlogs-Style')); ?>
<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/PWBlogs-Music', array('title' => 'Make Major Moves','permalink' => 'http://feeds2.feedburner.com/PWBlogs-Music')); ?>
</div>

<?php chromebot(); ?>