	<div id="newsworks" class="four chunk clearLeft">
<a class="anchor" name="newsworks"></a>
	<h2 class="col-md-12 maintitle"><span>WHYY NewsWorks.org</span></h2>	
	<?php echo newsblocks::listingorig('http://feeds.feedburner.com/Newsworks', array(
				'title' => 'NewsWorks',
				'permalink' => 'http://www.newsworks.org/'
			)); ?>
	<?php echo newsblocks::listingorig('http://feeds.feedburner.com/Newsworks-ArtsandCulture', array(
				'title' => 'Arts + Culture',
				'permalink' => 'http://www.newsworks.org/index.php/more-arts'
			)); ?>
	<?php echo newsblocks::listingorig('http://www.newsworks.org/index.php/healthscience?format=feed&type=rss', array(
				'title' => 'Health + Science',
				'permalink' => 'http://www.newsworks.org/index.php/healthscience'
			)); ?>												
	<?php echo newsblocks::listingorig('http://feeds.feedburner.com/Newsworks-blogs', array(
				'title' => 'Blogs',
				'permalink' => 'http://www.newsworks.org/index.php/blog'
			)); ?>
	</div>