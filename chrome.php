<?php
function chrometop($page = '') {
require_once('scripts/simplepie.inc');
require_once('scripts/newsblocks.inc.php');
header('Content-type:text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<? include ('partials/structure/htmlhead.php'); ?>
</head>


<body class="<?php if ($page == 'Home') echo ' home' ?>">

<div class="top-nav"><ul class="nav"></ul></div>

<div class="intro">
This site brings you the latest philadelphia news from all news sources in the area. Up to the minute reports from your favorite sources. NBC10, CBS3, ABC6, FOX29, Philly Metro, Philadelphia Inquirer, Philadelphia Daily News, Philly.com. We have food blogs, entertainment news, events and happenings.
</div>

<?php include 'partials/structure/header.php'; ?>

<div class="ui grid"><div class="sixteen wide column">
  

<?php } function chromebot() { ?>

</div></div>

<div id="phonedummy" class="dummy"></div>
<div id="tabletdummy" class="dummy"></div>
<div id="desktopdummy" class="dummy"></div>
<div id="widedummy" class="dummy"></div>
<div class="ui inverted vertical left sidebar menu">
	<div class="ui inverted menu">
		<a class="item" href="#topn" title="Top News"><b>Top News</b></a>
		<a class="item" href="#busi" title="Business"><b>Business</b></a>
		<a class="item" href="#lega" title="Legal News"><b>Legal</b></a>
		<a class="item" href="#spor" title="Sports"><b>Sports</b></a>
		<a class="item" href="#free" title="Free Press"><b>Free Press</b></a>
		<a class="item" href="#univ" title="Universities"><b>Universities</b></a>
		<a class="item" href="#tech" title="Technology"><b>Tech</b></a>
		<a class="item" href="#funn" title="Funnies"><b>Comics</b></a>
		<a class="item" href="#city" title="City Life"><b>City Life</b></a>
		<a class="item" href="#real" title="Real Estate"><b>Real Estate</b></a>
		<a class="item" href="#food" title="Food"><b>Food</b></a>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>    
<script type="text/javascript" src="/sui/javascript/semantic.min.js"></script>
<script type="text/javascript" src="js/funcs.js"></script>
</body>
</html>

<?php } ?>