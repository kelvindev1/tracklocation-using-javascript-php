<?php

$latitude = isset($_GET['lat']) ? floatval($_GET['lat']) : 0;
$longitude = isset($_GET['long']) ? floatval($_GET['long']) : 0;
$userAgent = isset($_GET['uagent']) ? $_GET['uagent'] : '';
$ipLocation = isset($_GET['iplocation']) ? $_GET['iplocation'] : '';

if ($latitude !== 0 && $longitude !== 0 && $userAgent !== '') {
    $myfile = fopen("location.txt", "a");
    $txt = "lat: " . $latitude . "\nlong: " . $longitude . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser agent: " . $userAgent . "\nIP-based location: " . $ipLocation . "\n\n";
    fwrite($myfile, $txt);
    fclose($myfile);
} else {
    error_log("Invalid or missing parameters in the request.");
}

?>