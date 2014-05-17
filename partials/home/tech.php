<div class="container" id="tech">
<div class="row">
<h2 class="col-md-12 maintitle"><span>Technology</span></h2>
<div class="col-md-4"><?php echo newsblocks::listingorig( 'http://feeds.feedburner.com/Geekadelphia' , array( 'title' => 'Geekadelphia', 'permalink' => 'http://Geekadelphia.com/' )); ?></div>
<div class="col-md-4"><?php echo newsblocks::listing( 'http://www.philly.com/philly/business/technology/index.rss' , array( 'title' => 'Philly.com - Tech', 'permalink' => 'http://www.philly.com/philly/business/technology/' )); ?></div>
<div class="col-md-4"><?php echo newsblocks::listingorig( 'http://feeds.feedburner.com/TechnicallyPhilly?format=xml' , array( 'title' => 'Technically Philly', 'permalink' => 'http://technicallyphilly.com/' )); ?>	</div>
</div>
</div><!-- /chunk-wrap -->