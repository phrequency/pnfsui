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


</body>
</html>

<?php } ?>