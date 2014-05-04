<?php

$playlist_url = 'http://gdata.youtube.com/feeds/api/playlists/E8941F2EEEC5912A?v=2';

$ch = curl_init($playlist_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);

echo $data;
$xml = new SimpleXMLElement($data);


$video = $xml->feed->item->name;


?>


