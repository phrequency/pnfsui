<?php //include('social.php'); ?>

<div class="three column doubling ui grid">
	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://philadelphia.cbslocal.com/feed/', array( 'title' => 'CBS3', 'permalink' => 'http://cbs3.com/' )); ?></div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listing('http://abclocal.go.com/wpvi/xml?id=7095535', array( 'title' => '6ABC', 'permalink' => 'http://abclocal.go.com/wpvi/index' )); ?></div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://www.nbcphiladelphia.com/news/local/?rss=y&embedThumb=y&summary=y', array( 'title' => 'NBC10', 'permalink' => 'http://www.nbcphiladelphia.com/news/' )); ?></div></div>

	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://www.myfoxphilly.com/category/233386/local-news?clienttype=rss', array( 'title' => 'FOX29', 'permalink' => 'http://www.myfoxphilly.com/' )); ?></div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://feeds.feedburner.com/Newsworks', array( 'title' => 'NewsWorks', 'permalink' => 'http://www.newsworks.org/' )); ?></div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://www.wfmz.com/news/-/121458/-/format/rss_2.0/view/asFeed/-/12r092iz/-/index.xml', array( 'title' => 'WFMZ 69', 'permalink' => 'http://www.wfmz.com/index.html' )); ?></div></div>

	<div class="column"><div class="ui segment"><?php echo newsblocks::listing('http://www.philly.com/inquirer_front_page.rss', array( 'title' => 'Inquirer', 'permalink' => 'http://www.philly.com/inquirer/' )); ?></div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listing('http://www.philly.com/philly_news_local.rss', array( 'title' => 'Philly.com', 'permalink' => 'http://www.philly.com/' )); ?></div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://www.metro.us/philadelphia/feed/', array( 'title' => 'Metro Philly', 'permalink' => 'http://www.metro.us/philadelphia/' )); ?>	</div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://www.delcotimes.com/section?template=RSS&profile=4003208&mime=xml', array( 'title' => 'Delco Times', 'permalink' => 'http://delcotimes.com/' )); ?>	</div></div>



<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle"
style="display:block"
data-ad-client="ca-pub-4501591521497829"
data-ad-slot="3656807602"
data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</script> -->


	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://www.buckscountycouriertimes.com/search/?q=&t=article&l=10&d=&d1=&d2=&s=start_time&sd=desc&c[]=news/local/*&f=rss', array( 'title' => 'Courier Times', 'permalink' => 'http://www.buckscountycouriertimes.com/' )); ?>				</div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listing('http://www.buckslocalnews.com/?rss=the_advance/news', array( 'title' => 'Bucks Local News', 'permalink' => 'http://www.buckslocalnews.com' )); ?></div></div>
	<div class="column"><div class="ui segment"><?php echo newsblocks::listingorig('http://www.timesherald.com/section/NEWS01&template=RSS&mime=xml', array( 'title' => 'Times Herald', 'permalink' => 'http://www.timesherald.com/' )); ?></div></div>
</div>