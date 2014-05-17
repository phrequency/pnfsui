<?
//============================================================================
//============================================================================
// Script:    	PHP Script "Yahoo Weather Demo"
//============================================================================
// From:	www.voegeli.li
// Autor:	marco voegeli, switzerland - >> www.voegeli.li >>
// Date:	28-Oct-2005 
// License/
// Usage:	Open Source / for free	
//============================================================================
// DESCRIPTION:
// This Script is the example of the class yahoo weather! It shows all
// attributes of the class ad shows how to use it!
//============================================================================
// Modified: Dec 2006 by Matt Brown
//============================================================================
// Visit http://dowdybrown.com , the contributor of the new version. Thank you
// Matt for this great and better version of the yahoo weather class! You have
// done a good job!
//============================================================================


// ------------------- 
// INCLUDES
// -------------------
include("scripts/class.xml.parser.php");
include("scripts/class.weather.php");

// ------------------- 
// LOGIC
// -------------------
// Create the new weather object!
// CIXX0020 = Location Code from weather.yahoo.com
// 3600     = seconds of cache lifetime (expires after that)
// C        = Units in Celsius! (Option: F = Fahrenheit)

$timeout=3*60*60;  // 3 hours
if (isset($_ENV["TEMP"]))
  $cachedir=$_ENV["TEMP"];
else if (isset($_ENV["TMP"]))
  $cachedir=$_ENV["TMP"];
else if (isset($_ENV["TMPDIR"]))
  $cachedir=$_ENV["TMPDIR"];
else
// Default Cache Directory  
  $cachedir="/tmp";
  
$cachedir=str_replace('\\\\','/',$cachedir);
if (substr($cachedir,-1)!='/') $cachedir.='/';

$weather_chile = new weather("USPA1276", 3600, "C", $cachedir);

// Parse the weather object via cached
// This checks if there's an valid cache object allready. if yes
// it takes the local object data, what's much FASTER!!! if it
// is expired, it refreshes automatically from rss online!
$weather_chile->parsecached(); // => RECOMMENDED!

// allway refreshes from rss online. NOT SO FAST. 
//$weather_chile->parse(); // => NOT recommended!


// ------------------- 
// OUTPUT
// -------------------

// CURRENT

//$weatherimg_dir_suffix = '_light';
if (isset($style)) $weatherimg_dir_suffix = '_'.$style; 
print '<a href="#weather-forecast" style="background-image: url(img/weather-white/'.$weather_chile->forecast['CURRENT']['CODE'].'.png);">';
print '<strong>'.$weather_chile->forecast['CURRENT']['TEMP'].'&deg;</strong>';
print '<em><span class="curr-h">'.$weather_chile->forecast[0]['HIGH'].'&deg;</span><span class="curr-l"> '; // 19
print $weather_chile->forecast[0]['LOW'].'&deg;</span></em></a>';   // 8
?>