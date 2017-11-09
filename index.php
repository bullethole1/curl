<?php

$ch = curl_init("https://sv.lipsum.com/");
$fp = fopen("ovning2.html", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

$words = [
    'lorem' => 0,
    'ipsum' => 0
];
$lines = file_get_contents('ovning2.html');
$lines = strip_tags($lines);
$lines = explode(" ", $lines);

foreach ($words as $word => $amount) {
    foreach($lines as $line) {
        if(strpos($line, $word) !== false) {
            $words[$word] = $words[$word] + 1;
        }
    }
}

var_dump($words);