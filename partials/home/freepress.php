<div class="container" id="free">
	<div class="row">
		<h2 class="col-md-12 maintitle"><span>Free Press</span></h2>
		<div class="col-md-4"><?php echo newsblocks::listing('http://feeds2.feedburner.com/PWBlogs-Music', array( 'title' => 'Philadelphia Weekly - Music', 'permalink' => 'http://www.philadelphiaweekly.com' )); ?></div>
		<div class="col-md-4"><?php echo newsblocks::listingorig('http://feeds.feedburner.com/Newsworks-ArtsandCulture', array( 'title' => 'NewsWorks Arts Culture', 'permalink' => 'http://www.newsworks.org/index.php/more-arts' )); ?></div>
		<div class="col-md-4"><?php echo newsblocks::listingorig('http://www.phillytrib.com/newsarticles.feed', array( 'title' => 'Philly Tribune', 'permalink' => 'http://www.phillytrib.com/newsarticles' )); ?></div>
	</div>
</div><!-- /chunk-wrap -->