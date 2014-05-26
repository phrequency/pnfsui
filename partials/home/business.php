<div class="chunk" id="busi">
	<h2 class="ui header">Business</h2>
	<div class="three column stackable ui block grid">
		<?php echo newsblocks::listing('http://feeds.bizjournals.com/bizj_philadelphia', array( 'title' => 'Phila Business Journal', 'permalink' => 'http://philadelphia.bizjournals.com/philadelphia/' )); ?>
		<?php echo newsblocks::listing('http://www.philly.com/inq_business.rss', array( 'title' => 'Inquirer Business', 'permalink' => 'http://www.philly.com/inquirer/business/' )); ?>
		<?php echo newsblocks::listing('http://www.nbcphiladelphia.com/news/business/?rss=y&embedThumb=n&summary=y', array( 'title' => 'NBC10 Business', 'permalink' => 'http://www.nbcphiladelphia.com/news/business/' )); ?>
	</div>
</div>