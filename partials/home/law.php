<div class="chunk" id="lega">
	<h2 class="ui header">Legal News</h2>
	<div class="three column stackable ui block grid">
		<?php echo newsblocks::listingorig('http://feeds2.feedburner.com/TortTalk', array( 'title' => 'Tort Talk', 'permalink' => 'http://www.torttalk.com/' )); ?>
		<?php echo newsblocks::listingorig('http://druganddevicelaw.blogspot.com/feeds/posts/default?alt=rss', array( 'title' => 'Drug and Device Law', 'permalink' => 'http://druganddevicelaw.blogspot.com/' )); ?>
		<?php echo newsblocks::listingorig('http://www.phillyrecord.com/feed/', array( 'title' => 'Philly Record', 'permalink' => 'http://www.phillyrecord.com/' )); ?>
	</div>
</div><!-- /chunk-wrap -->