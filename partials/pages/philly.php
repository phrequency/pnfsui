<?php
$page = 'Philly.com';
require('chrome.php');
chrometop($page);
?>

<div class="chunk clearLeft">
<h2 class="maintitle"><span>Philly.com</span></h2>
<?php echo newsblocks::listing('http://www.philly.com/philly_news.rss', array('title' => 'News','permalink' => 'http://www.philly.com/philly_news.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly_business.rss', array('title' => 'Business','permalink' => 'http://www.philly.com/philly_business.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly_sports.rss', array('title' => 'Sports','permalink' => 'http://www.philly.com/philly_sports.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly_business_personal_finance.rss', array('title' => 'Personal Finance','permalink' => 'http://www.philly.com/philly_business_personal_finance.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/inq-phillydeals/index.rss', array('title' => 'Philly Deal$','permalink' => 'http://www.philly.com/philly/blogs/inq-phillydeals/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/business/technology/index.rss', array('title' => 'Your Tech','permalink' => 'http://www.philly.com/philly/business/technology/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly_sports_columnists.rss', array('title' => 'Sports Blogs','permalink' => 'http://www.philly.com/philly_sports_columnists.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly_eagles.rss', array('title' => 'Eagles','permalink' => 'http://www.philly.com/philly_eagles.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/dneagles/index.rss', array('title' => 'Eagles Blog','permalink' => 'http://www.philly.com/philly/blogs/dneagles/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/moving_the_chains/index.rss', array('title' => 'Moving the Chains','permalink' => 'http://www.philly.com/philly/blogs/moving_the_chains/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly_sixers.rss', array('title' => 'Sixers','permalink' => 'http://www.philly.com/philly_sixers.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/sports_phillies.rss', array('title' => 'Phillies','permalink' => 'http://www.philly.com/sports_phillies.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/phillies/index.rss', array('title' => 'High Cheese ','permalink' => 'http://www.philly.com/philly/blogs/phillies/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly_flyers.rss', array('title' => 'Flyers','permalink' => 'http://www.philly.com/philly_flyers.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/hofmann/index.rss', array('title' => 'The Idle Rich','permalink' => 'http://www.philly.com/philly/blogs/hofmann/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/living_home.rss', array('title' => 'Living Home ','permalink' => 'http://www.philly.com/living_home.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/home/gardening/index.rss', array('title' => 'Gardening','permalink' => 'http://www.philly.com/philly/home/gardening/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/inq-blinq/index.rss', array('title' => 'Blinq','permalink' => 'http://www.philly.com/philly/blogs/inq-blinq/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly_politics.rss', array('title' => 'Politics','permalink' => 'http://www.philly.com/philly_politics.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/heardinthehall/index.rss', array('title' => 'Heard in City Hall','permalink' => 'http://www.philly.com/philly/blogs/heardinthehall/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/harrisburg_politics/index.rss', array('title' => 'Harrisburg Politics','permalink' => 'http://www.philly.com/philly/blogs/harrisburg_politics/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/phillygossip/index.rss', array('title' => 'Philly Gossip','permalink' => 'http://www.philly.com/philly/blogs/phillygossip/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/phillyinc/index.rss', array('title' => 'PhillyInc','permalink' => 'http://www.philly.com/philly/blogs/phillyinc/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/pretzel/index.rss', array('title' => 'Soft Pretzel Logic','permalink' => 'http://www.philly.com/philly/blogs/pretzel/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly/columnists/index.rss', array('title' => 'Columnists','permalink' => 'http://www.philly.com/philly/columnists/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/attytood/', array('title' => 'Attytood','permalink' => 'http://www.philly.com/philly/blogs/attytood/')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly_entertainment.rss', array('title' => 'Entertainment','permalink' => 'http://www.philly.com/philly_entertainment.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly_entertainment_celebrities.rss', array('title' => 'Celebrities','permalink' => 'http://www.philly.com/philly_entertainment_celebrities.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/entertainment/columnists/index.rss', array('title' => 'Entertainment Columnists','permalink' => 'http://www.philly.com/philly/entertainment/columnists/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly_movies.rss', array('title' => 'Movies','permalink' => 'http://www.philly.com/philly_movies.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly_entertainment_arts.rss', array('title' => 'Arts & Entertainment','permalink' => 'http://www.philly.com/philly_entertainment_arts.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly_music_nightlife.rss', array('title' => 'Nightlife ','permalink' => 'http://www.philly.com/philly_music_nightlife.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/mirrorimage/index.rss', array('title' => 'Mirror Image','permalink' => 'http://www.philly.com/philly/blogs/mirrorimage/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly/columnists/dear_abby/index.rss', array('title' => 'Dear Abby','permalink' => 'http://www.philly.com/philly/columnists/dear_abby/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/living/index.rss', array('title' => 'Living','permalink' => 'http://www.philly.com/philly/living/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/living/pets/index.rss', array('title' => 'Pets','permalink' => 'http://www.philly.com/philly/living/pets/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/philly_entertainment_dining.rss', array('title' => 'Dining','permalink' => 'http://www.philly.com/philly_entertainment_dining.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/restaurants/beer/index.rss', array('title' => 'Beer','permalink' => 'http://www.philly.com/philly/restaurants/beer/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/dailynews/columnists/index.rss', array('title' => 'DN Columnists','permalink' => 'http://www.philly.com/dailynews/columnists/index.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/inquirer_front_page.rss', array('title' => 'Inquirer Front Page ','permalink' => 'http://www.philly.com/inquirer_front_page.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/inquirer/columnists/craig_laban/index.rss', array('title' => 'Craig Laban','permalink' => 'http://www.philly.com/inquirer/columnists/craig_laban/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/inq_business.rss', array('title' => 'Inq Business','permalink' => 'http://www.philly.com/inq_business.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/inq_columnists.rss', array('title' => 'Inq Columnists','permalink' => 'http://www.philly.com/inq_columnists.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/inq_entertainment.rss', array('title' => 'Inq Entertainment','permalink' => 'http://www.philly.com/inq_entertainment.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/inq_books.rss', array('title' => 'Inq Books','permalink' => 'http://www.philly.com/inq_books.rss')); ?>
</div>
<div class="chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/inq_food.rss', array('title' => 'Inq Food','permalink' => 'http://www.philly.com/inq_food.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/inquirer_health_science.rss', array('title' => 'Inq Health and Science ','permalink' => 'http://www.philly.com/inquirer_health_science.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/inq_home_design.rss', array('title' => 'Home Design','permalink' => 'http://www.philly.com/inq_home_design.rss')); ?>
</div>
<div class="four chunk clearLeft">
<?php echo newsblocks::listingorig('http://www.philly.com/inquirer/home_design/gardening/index.rss', array('title' => 'Gardening','permalink' => 'http://www.philly.com/inquirer/home_design/gardening/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/inquirer/image/index.rss', array('title' => 'Style & Soul','permalink' => 'http://www.philly.com/inquirer/image/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/the-insider/index.rss', array('title' => 'Inq The Insider','permalink' => 'http://www.philly.com/philly/blogs/the-insider/index.rss')); ?>
<?php echo newsblocks::listingorig('http://www.philly.com/philly/blogs/wingingit/index.rss', array('title' => 'Inq Winging It','permalink' => 'http://www.philly.com/philly/blogs/wingingit/index.rss')); ?>
</div>
<?php chromebot(); ?>