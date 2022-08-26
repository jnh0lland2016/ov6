<?php
$URL = "https://dbm2consulting.com/OV6";
$options = array(
   CURLOPT_RETURNTRANSFER => true,  // Return web page
   CURLOPT_HEADER         => false, // Don't return headers
   CURLOPT_CONNECTTIMEOUT => 120,   // Timeout on connect
   CURLOPT_TIMEOUT        => 120,   // Timeout on response
   CURLOPT_FOLLOWLOCATION => true,  // Follow redirects
   CURLOPT_MAXREDIRS      => 10,    // stop after 10 redirects
   CURLOPT_VERBOSE        => false
);
$ch = curl_init($URL);
curl_setopt_array($ch,$options);
echo(curl_exec($ch));
curl_close($ch);
?>


