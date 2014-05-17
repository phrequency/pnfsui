<div class="container" id="food">
<div class="row">
	<h2 class="col-md-12 maintitle"><span>Food</span></h2>
	<div class="col-md-4"><?php echo newsblocks::listingorig('http://www.phoodie.info/feed/', array( 'title' => 'Phoodie', 'permalink' => 'http://www.phoodie.info', 'items' => 10 )); ?></div>
	<div class="col-md-4"><?php echo newsblocks::listingorig('http://www.philly.com/the-insider.rss', array( 'title' => 'Philly Insider', 'permalink' => 'http://www.philly.com/philly/blogs/the-insider/', 'items' => 10 )); ?></div>
	<div class="col-md-4"><?php echo newsblocks::listingorig('http://philly-ism.com/feed/', array( 'title' => 'Philly-ism', 'permalink' => 'http://philly-ism.com/', 'items' => 10 )); ?></div>
</div>
</div><!-- /chunk-wrap -->