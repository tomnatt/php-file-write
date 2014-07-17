<?php

date_default_timezone_set("UTC");

$file = "time.txt";
$now = strtotime("now");
$content = "The time is now " . date("H:i:s", $now) . "\n";

// echo $content;

// sleep to prove the order
sleep(10);
file_put_contents($file, $content);

?>