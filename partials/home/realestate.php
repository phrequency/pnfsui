<div class="container" id="real">
<div class="row">
<h2 class="col-md-12 maintitle"><span>Real Estate</span></h2>
<div class="col-md-3"><?php echo newsblocks::listing('http://nakedphilly.com/feed/', array( 'title' => 'Naked Philly', 'permalink' => 'http://nakedphilly.com/' )); ?></div>
<div class="col-md-3"><?php echo newsblocks::listing('http://planphilly.com/news/yahoo/rss.xml', array( 'title' => 'Plan Philly', 'permalink' => ' http://planphilly.com/' )); ?></div>
<div class="col-md-3"><?php echo newsblocks::listing('http://philly.curbed.com/atom.xml', array( 'title' => 'Curbed Philly', 'permalink' => 'http://philly.curbed.com/' )); ?></div>
<div class="col-md-3"><?php echo newsblocks::listing('http://www.philadelinquency.com/?feed=rss2', array( 'title' => 'Philadelinquency', 'permalink' => 'http://philadelinquency.com' )); ?></div>
</div>

</div><!-- /chunk-wrap -->