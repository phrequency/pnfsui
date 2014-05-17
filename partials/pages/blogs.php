<?php
$mnav = 'blog';
require('chrome.php');
showChromeTop($mnav);
?>

<div class="chunk clearLeft">
<h2 class="maintitle"><span>City Life</span></h2>
<?php echo newsblocks::listing('http://philadelphia.cities2night.com/feeds/events.groovy?site=1', array('title' => 'Philly2Night','permalink' => 'http://philadelphia.cities2night.com/')); ?>
<?php echo newsblocks::listing('http://www.215blog.com/feeds/posts/default', array('title' => '215 Blog','permalink' => 'http://www.215blog.com/')); ?>
<?php echo newsblocks::listing('http://fiftyonefiftyone.com/feed/', array('title' => 'Fiftyone:Fiftyone ','permalink' => 'http://fiftyonefiftyone.com/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://feeds.feedburner.com/TheIlladelph', array('title' => 'The Illadelph ','permalink' => 'http://theilladelph.blogspot.com/')); ?>
<?php echo newsblocks::listing('http://feeds.feedburner.com/PhillyChitChat', array('title' => 'Philly Chit Chat','permalink' => 'http://www.phillychitchat.com/')); ?>
<?php echo newsblocks::listing('http://feeds.feedburner.com/shmittenkitten', array('title' => 'Shmitten Kitten','permalink' => 'http://www.shmittenkitten.com/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://www.irishphiladelphia.com/index/feed', array('title' => 'Irish Philadelphia','permalink' => 'http://www.irishphiladelphia.com/')); ?>
<?php echo newsblocks::listing('http://libwww.library.phila.gov/blog/rss.cfm', array('title' => 'Free Library Blog','permalink' => 'http://libwww.library.phila.gov/blog/index.cfm')); ?>
<?php echo newsblocks::listing('http://feeds.dailycandy.com/dailycandyphi', array('title' => 'Daily Candy','permalink' => 'http://www.dailycandy.com/philadelphia/?city=13&switch=1')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://youngphillypolitics.com/node/feed', array('title' => 'Young Philly Politics','permalink' => 'http://youngphillypolitics.com/')); ?>
<?php echo newsblocks::listing('http://www.broadstreetreview.com/index.php/main/rss_2.0/', array('title' => 'Broad Street Review','permalink' => 'http://www.broadstreetreview.com/')); ?>
<?php echo newsblocks::listing('http://feeds2.feedburner.com/citypaper/NWfg', array('title' => 'The Clog','permalink' => 'http://citypaper.net/blogs/clog/')); ?>
</div>

<div class="chunk clearLeft">
<h2 class="maintitle"><span>Arts</span></h2>
<?php echo newsblocks::listing('http://theartblog.org/feed/', array('title' => 'The Art Blog','permalink' => 'http://theartblog.org/')); ?>
<?php echo newsblocks::listing('http://www.firstpersonarts.org/feed/', array('title' => 'First Person Arts','permalink' => 'http://www.firstpersonarts.org/feed/')); ?>
<?php echo newsblocks::listingorig('http://designphiladelphia.wordpress.com/feed/', array('title' => 'Design Philadelphia','permalink' => 'http://designphiladelphia.wordpress.com/')); ?>
</div>
<div class="chunk clearLeft">
<h2 class="maintitle"><span>Music</span></h2>
<?php echo newsblocks::listing('http://walrusmusicblog.com/feed/', array('title' => 'Walrus Music Blog','permalink' => 'http://walrusmusicblog.com/')); ?>
<?php echo newsblocks::listing('http://xpn.org/allaboutthemusic/feed', array('title' => 'XPN Music','permalink' => 'http://xpn.org/allaboutthemusic/')); ?>
<?php echo newsblocks::listing('http://thebeatofphilly.com/feed/', array('title' => 'The beat of Philly','permalink' => 'http://thebeatofphilly.com/')); ?>
</div>
<div class="four chunk clearLeft">
<h2 class="maintitle"><span>Style</span></h2>
<?php echo newsblocks::listing('http://feeds.dailycandy.com/dailycandyphi', array('title' => 'Daily Candy Phila','permalink' => 'http://www.dailycandy.com/philadelphia/')); ?>
<?php echo newsblocks::listing('http://www.carolinetiger.com/feed/', array('title' => 'Caroline Tiger','permalink' => 'http://www.carolinetiger.com/')); ?>
<?php echo newsblocks::listing('http://feeds.feedburner.com/blogs/Otkg', array('title' => 'Oh Joy','permalink' => 'http://www.ohjoy.blogs.com/')); ?>
<?php echo newsblocks::listing('http://streetsandstripes.blogspot.com/feeds/posts/default', array('title' => 'Streets and Stripes','permalink' => 'http://streetsandstripes.blogspot.com/')); ?>
</div>
<div class="chunk clearLeft">
<h2 class="maintitle"><span>Personal Blogs</span></h2>
<?php echo newsblocks::listing('http://feeds.feedburner.com/usedwigs', array('title' => 'Used Wigs','permalink' => 'http://usedwigs.com/')); ?>
<?php echo newsblocks::listing('http://www.andherlittledogtoo.com/feeds/posts/default', array('title' => 'And Her Little Dog Too','permalink' => 'http://www.andherlittledogtoo.com/')); ?>
<?php echo newsblocks::listing('http://philadelphiawilldo.com/rss', array('title' => 'Philadelphia Will Do','permalink' => 'http://philadelphiawilldo.com/')); ?>
</div>

<?php showChromeBot(); ?>