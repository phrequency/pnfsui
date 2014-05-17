<div class="container" id="busi">
<div class="row">
<h2 class="col-md-12 maintitle"><span>Business</span></h2>
<div class="col-md-4"><?php echo newsblocks::listing('http://feeds.bizjournals.com/bizj_philadelphia', array( 'title' => 'Phila Business Journal', 'permalink' => 'http://philadelphia.bizjournals.com/philadelphia/' )); ?></div>
<div class="col-md-4"><?php echo newsblocks::listing('http://www.philly.com/inq_business.rss', array( 'title' => 'Inquirer Business', 'permalink' => 'http://www.philly.com/inquirer/business/' )); ?></div>
<div class="col-md-4"><?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/business/?rss=y&embedThumb=n&summary=y', array( 'title' => 'NBC10 Business', 'permalink' => 'http://www.nbcphiladelphia.com/news/business/' )); ?></div>
</div>
</div><!-- /chunk-wrap -->