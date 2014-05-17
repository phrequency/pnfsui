<div class="chunk-wrap">
<a class="anchor" name="weather-forecast" id="weat"></a>
<div class="chunk">
<h2 class="col-md-12 maintitle"><span>Forecast</span></h2>
<ul class="forecast-lg">
<?php

$url = 'http://free.worldweatheronline.com/feed/weather.ashx?key=15fa182469180331110511&q=19104&num_of_days=5&format=xml';
$xml = simplexml_load_file($url);

foreach($xml->current_condition as $current_condition)
{
echo <<< EOT
<li class="weather-item current"><div class="weather-item-inner">
<h2>Current Conditions</h2>
<div class="icon"><img src="$current_condition->weatherIconUrl"></div>
<div class="temp"><span class="current">$current_condition->temp_F&deg;</span></div>
<div class="text">$current_condition->weatherDesc</div>
<div class="clear">
<div class="text">
Wind $current_condition->windspeedMiles mph $current_condition->winddir16Point<br />
Humidity $current_condition->humidity %
</div>
</div>
</div></li>
EOT;
}


foreach($xml->weather as $weather)
{
$month = date('D', strtotime($weather->date));
$day = date('j', strtotime($weather->date));
echo <<< EOT
<li class="weather-item"><div class="weather-item-inner">
<div class="date"><span class="month">$month</span> <span class="day">$day</span></div>
<div class="icon"><div class="icon-effects"></div><img src="$weather->weatherIconUrl"></div>
<div class="text">$weather->weatherDesc</div>
<div class="temp"><span class="high"> H $weather->tempMaxF &deg; </span><span class="low"> L $weather->tempMinF &deg; </span></div>
</div></li>
EOT;
} 

?>
</ul>

</div>

</div><!-- /chunk-wrap -->