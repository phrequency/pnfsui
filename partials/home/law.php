<div class="container" id="lega">
<div class="row">
<h2 class="maintitle col-md-12"><span>Legal News</span></h2>
<div class="col-md-4"><?php echo newsblocks::listingorig('http://feeds2.feedburner.com/TortTalk', array( 'title' => 'Tort Talk', 'permalink' => 'http://www.torttalk.com/' )); ?></div>
<div class="col-md-4"><?php echo newsblocks::listingorig('http://druganddevicelaw.blogspot.com/feeds/posts/default?alt=rss', array( 'title' => 'Drug and Device Law', 'permalink' => 'http://druganddevicelaw.blogspot.com/' )); ?></div>
<div class="col-md-4"><?php echo newsblocks::listingorig('http://www.phillyrecord.com/feed/', array( 'title' => 'Philly Record', 'permalink' => 'http://www.phillyrecord.com/' )); ?></div>
</div>
</div><!-- /chunk-wrap -->