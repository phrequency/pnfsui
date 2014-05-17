<div class="container" id="univ">
<div class="row">
<h2 class="col-md-12 maintitle"><span>University Life</span></h2>
<div class="col-md-4"><?php echo newsblocks::listing('http://www.thedp.com/section/news.xml', array( 'title' => 'University of Pennsylvania', 'permalink' => 'http://www.thedp.com/', 'items' => 10 )); ?></div>
<div class="col-md-4"><?php echo newsblocks::listing('http://www.drexel.edu/news/headlines/rss/', array( 'title' => 'Drexel University', 'permalink' => 'http://www.drexel.edu/news/headlines' )); ?></div>
<div class="col-md-4"><?php echo newsblocks::listing('http://temple-news.com/news/feed/', array( 'title' => 'Temple University', 'permalink' => 'http://temple-news.com/' )); ?></div>
</div>
</div><!-- /chunk-wrap -->