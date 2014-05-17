<div class="container" id="spor">
<div id="sport2" class="row teams">
	<h2 class="maintitle col-md-12"><span>Sports</span></h2>
	<div class="col-md-4 eagles">
	<?php echo newsblocks::listing('http://sports.yahoo.com/nfl/teams/phi/rss.xml', array( 'title' => 'Eagles', 'permalink' => 'http://sports.yahoo.com/nfl/teams/phi', 'items' => 10 )); ?>
	</div><!-- /eagles -->
	<div class="col-md-4 flyers">	
	<?php echo newsblocks::listing(array('http://sports.yahoo.com/nhl/teams/phi/rss.xml'), array( 'title' => 'Flyers', 'permalink' => 'http://sports.yahoo.com/nhl/teams/phi' )); ?>
	</div><!-- /flyers -->
	<div class="col-md-4 sixers">
	<?php echo newsblocks::listing('http://sports.yahoo.com/nba/teams/phi/rss.xml', array( 'title' => '76ers', 'permalink' => 'http://sports.yahoo.com/nba/teams/phi' )); ?>
	</div><!-- /sixers -->
</div><!-- /sport2 -->

<div id="sport3" class="row teams">
	<div class="col-md-6 phillies">
	<?php echo newsblocks::listing('http://mlb.mlb.com/partnerxml/gen/news/rss/phi.xml', array( 'title' => 'Phillies', 'permalink' => 'http://philadelphia.phillies.mlb.com/news/index.jsp?c_id=phi' )); ?>
	</div><!-- /phillies -->

	<div class="col-md-6 union">
	<?php echo newsblocks::listing('http://www.philadelphiaunion.com/rss/en.xml', array( 'title' => 'Philadelphia Union', 'permalink' => 'http://www.philadelphiaunion.com/' )); ?>
	</div><!-- /union -->
</div><!-- /sport3 -->

<div class="row hidden-sm hidden-xs"><div class="col-md-12">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4501591521497829";
/* Sports Area */
google_ad_slot = "3637244594";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div></div><!-- /ad-wide -->

<div class="row">
<div class="col-md-4"><?php echo newsblocks::listing( 'http://feeds.feedburner.com/The700levelcom-PhillySportsMinutiae' , array( 'title' => 'The 700 Level', 'permalink' => 'http://www.the700level.com/')); ?></div>
<div class="col-md-4"><?php echo newsblocks::listing('http://feeds.feedburner.com/crossingbroad', array( 'title' => 'Crossing Broad', 'permalink' => 'http://www.crossingbroad.com/')); ?></div>
<div class="col-md-4"><?php echo newsblocks::listing( 'http://phillysportscentral.com/feed' , array( 'title' => 'Philly Sports Central', 'permalink' => 'http://www.phillysportscentral.com/')); ?></div>
</div>
<div class="row">
<div id="sportsflickr" class="col-md-12 hidden-sm hidden-xs">	
<h3><span>700 Level Flickr</h3>
<?php echo newsblocks::wide('http://api.flickr.com/services/feeds/groups_pool.gne?id=18469227@N00&lang=en-us&format=rss_200', array('items' => 8)); ?>
</div><!-- /700flickr -->
</div>
</div><!-- /container -->
