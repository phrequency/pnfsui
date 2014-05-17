<?php
$page = 'FOX 29';
require('chrome.php');
chrometop($page);
?>

<div class="chunk clearLeft">
<h2 class="maintitle"><span>FOX29</span></h2>
<?php echo newsblocks::listingorig('http://www.myfoxphilly.com/category/233386/local-news?clienttype=rss', array('title' => 'Local News','permalink' => 'http://www.myfoxphilly.com/feeds/rssFeed?siteId=1011&obfType=RSS_FEED&categoryId=20000')); ?>
<?php echo newsblocks::listingorig('http://www.myfoxphilly.com/category/235656/investigative?clienttype=rss', array('title' => 'Fox29 Investigates','permalink' => 'http://www.myfoxphilly.com/feeds/rssFeed?siteId=1011&obfType=RSS_FEED&categoryId=20055')); ?>
<?php echo newsblocks::listingorig('http://www.myfoxphilly.com/category/230354/mostpopularstory?clienttype=rss', array('title' => 'Most Popular','permalink' => 'http://www.myfoxphilly.com/feeds/rssFeed?siteId=1011&obfType=RSS_FEED&categoryId=20273')); ?>
</div>	
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.myfoxphilly.com/category/230347/sports?clienttype=rss', array('title' => 'Sports','permalink' => 'http://www.myfoxphilly.com/feeds/rssFeed?siteId=1011&obfType=RSS_FEED&categoryId=20058')); ?>
<?php echo newsblocks::listingorig('http://www.myfoxphilly.com/category/240341/good-day-videos?clienttype=mrss', array('title' => 'Good Day Videos','permalink' => 'http://www.myfoxphilly.com/feeds/rssFeed?siteId=1011&obfType=RSS_FEED&categoryId=10008')); ?>
<?php echo newsblocks::listingorig('http://www.myfoxphilly.com/category/240346/weather-forecast-video?clienttype=mrss', array('title' => 'Weather Videos','permalink' => 'http://www.myfoxphilly.com/feeds/rssFeed?siteId=1011&obfType=RSS_FEED&categoryId=10005')); ?>
</div>

<?php chromebot(); ?>