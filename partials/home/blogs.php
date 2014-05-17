<div class="container" id="city">
	<div class="row">
		<h2 class="col-md-12 maintitle"><span>City Life</span></h2>
		<div class="col-md-4"><?php echo newsblocks::listing('http://feeds.feedburner.com/philebrityfeed', array( 'title' => 'Philebrity', 'permalink' => 'http://www.philebrity.com/', 'items' => 10 )); ?></div>
		<div class="col-md-4"><?php echo newsblocks::listing('http://www.philadelphiaspeaks.com/forum/external.php?type=RSS2', array( 'title' => 'Philadelphia Speaks', 'permalink' => 'http://www.philadelphiaspeaks.com/' )); ?></div>
		<div class="col-md-4"><?php echo newsblocks::listing('http://www.reddit.com/r/philadelphia/.rss', array( 'title' => 'Reddit Philly', 'permalink' => 'http://www.reddit.com/r/philadelphia/', 'items' => 10 )); ?></div>
	</div><!-- /chunk -->
	<div class="row">
		<div class="col-md-4"><?php echo newsblocks::listing('http://hiddencityphila.org/feed/', array( 'title' => 'Hidden City Phila', 'permalink' => 'http://hiddencityphila.org', 'items' => 15 )); ?></div>
		<div class="col-md-4"><?php echo newsblocks::listing('http://feeds.feedburner.com/PhillyChitChat', array('title' => 'Philly Chit Chat','permalink' => 'http://www.phillychitchat.com/')); ?></div>
		<div class="col-md-4"><div class="ad-block-inner">
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
	</div><!-- /chunk -->
	<div class="row">
		<div class="col-md-4"><?php echo newsblocks::listing('http://feeds.feedburner.com/ShmittenKitten', array('title' => 'Shmitten Kitten','permalink' => 'http://www.shmittenkitten.com/')); ?></div>
		<div class="col-md-4"><?php echo newsblocks::listing('http://www.phillymag.com/feed/', array('title' => 'Philly Mag','permalink' => 'http://www.phillymag.com/news/')); ?></div>
		<div class="col-md-4"><?php echo newsblocks::listingorig('http://www.phawker.com/feed/', array('title' => 'Phawker','permalink' => 'http://www.phawker.com/')); ?></div>

	</div><!-- /chunk -->
	<div class="row">
		<div class="col-md-6"><?php echo newsblocks::listing('http://feeds.feedburner.com/phillynow', array('title' => 'PhillyNow','permalink' => 'http://blogs.philadelphiaweekly.com/phillynow/')); ?></div>
		<div class="col-md-6"><?php echo newsblocks::listing('http://www.uwishunu.com/feed/', array( 'title' => 'uwishunu', 'permalink' => 'http://www.uwishunu.com/' )); ?></div>
	</div><!-- /chunk -->
</div><!-- /chunk-wrap -->





