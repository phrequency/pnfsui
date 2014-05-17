<?php
$page = 'Students';
require('chrome.php');
chrometop($page);
?>

<div class="chunk clearLeft">
<h2 class="maintitle"><span>Penn</span></h2>
<?php echo newsblocks::listing('http://www.upenn.edu/pennnews/rss.xml', array('title' => 'Penn News','permalink' => 'http://www.upenn.edu/pennnews/')); ?>
<?php echo newsblocks::listing('http://www.upenn.edu/pennnews/current/rss/topstories.xml', array('title' => 'Penn Current','permalink' => 'http://www.upenn.edu/pennnews/current/')); ?>
<?php echo newsblocks::listingorig('http://www.pennathletics.com/rss.dbml?db_oem_id=1700&media=news', array('title' => 'Penn Athletics','permalink' => 'http://www.pennathletics.com/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://www.whartonjournal.com/se/wharton-journal-rss-1.1427906', array('title' => 'Wharton Journal','permalink' => 'http://www.whartonjournal.com/')); ?>
<?php echo newsblocks::listing('http://spike.wharton.upenn.edu/Forums/rss.cfm?forum_guid=f6bcb19d-39a8-4869-a0c3-f2c391e38c52&method=index', array('title' => 'Spike @ Wharton - Marketplace ','permalink' => 'http://spike.wharton.upenn.edu/')); ?>
<?php echo newsblocks::listing('http://thedp.com/articles/feed', array('title' => 'Daily Pennsylvanian','permalink' => 'http://thedp.com/')); ?>
</div>
<div class="chunk clearLeft">
<h2 class="maintitle"><span>Drexel</span></h2>
<?php echo newsblocks::listing('http://www.drexel.edu/news/headlines/rss.aspx', array('title' => 'Drexel News','permalink' => 'http://www.drexel.edu')); ?>
<?php echo newsblocks::listing('http://www.ischool.drexel.edu/rss/news.rss', array('title' => 'iSchool at Drexel','permalink' => 'http://www.ischool.drexel.edu/')); ?>
<?php echo newsblocks::listing('http://www.thetriangle.org/articles.rss', array('title' => 'The Triangle ','permalink' => 'http://www.thetriangle.org/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listing('http://twitter.com/statuses/user_timeline/17814986.rss', array('title' => 'Drexel News Twitter','permalink' => 'http://twitter.com/drexelnews')); ?>
<?php echo newsblocks::listingorig('http://www.drexeldragons.com/rss.aspx', array('title' => 'Drexel Sports','permalink' => 'http://www.drexeldragons.com/')); ?>
<?php //echo newsblocks::listing('http://www.materials.drexel.edu/Calendar/RSS.aspx', array('title' => 'MSE Calendar Events','permalink' => 'http://www.materials.drexel.edu/')); ?>

<div class="nb-list ad-block"><div class="ad-block-inner">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4501591521497829";
/* Block Ad - Med Rect */
google_ad_slot = "3776941826";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div></div><!-- /ad-block -->
</div>
<div class="chunk clearLeft">
<h2 class="maintitle"><span>Temple</span></h2>
<?php echo newsblocks::listing('http://temple-news.com/feed/ ', array('title' => 'Temple News','permalink' => 'http://temple-news.com/')); ?>
<?php echo newsblocks::listing('http://broadandcecil.temple-news.com/feed/', array('title' => 'Broad and Cecil - Temple U','permalink' => 'http://broadandcecil.temple-news.com/')); ?>
<?php echo newsblocks::listing('http://blog.library.temple.edu/liblog/index.xml', array('title' => 'Temple University Library News','permalink' => 'http://blog.library.temple.edu/liblog/')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.owlsports.com/rss.aspx', array('title' => 'Owl Sports','permalink' => 'http://www.owlsports.com/')); ?>
<?php echo newsblocks::listingorig('http://templepress.wordpress.com/feed/', array('title' => 'North Philly Notes','permalink' => 'http://templepress.wordpress.com/')); ?>
<?php echo newsblocks::listing('http://prowlpublicrelations.blogspot.com/feeds/posts/default', array('title' => 'PRowl Public Relations','permalink' => 'http://prowlpublicrelations.blogspot.com/')); ?>
</div>

<div class="chunk ad-wide"><div class="ad-wide-inner">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4501591521497829";
/* PNF - Top News */
google_ad_slot = "1655108306";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div></div>
<?php chromebot(); ?>