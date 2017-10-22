<?php
$access_token = 'aTAZDqQoK1vF0CgDq0qR+Q8Yse/Bho3K9kattOkyMyoE6gXhhAJJGgXSoHmjSv4XgO1IVXAS2nmX03cbubtTrHjfPL+cWkB0PGb81HFUw1xXithBP40fc2siZWObee6z3ebS8g1yeVavVBjo9ef66AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
