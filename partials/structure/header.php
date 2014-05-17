<?php if ($page == 'Home') { ?> 


<div class="ui inverted menu">




<a class="item" href="#topn"><span class="icon-pretzel"></span> Philly News Feeds</a>
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

<span class="month"><?php date_default_timezone_set('America/New_York'); echo date("M"); ?></span><span class="day"><?php date_default_timezone_set('America/New_York'); echo date("d"); ?></span>
<?php include ("partials/structure/headerweather.php"); ?></li><!-- /weather -->
</div>

<?php } ?>