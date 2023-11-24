<?php
header("Refresh: 1");

date_default_timezone_set('Europe/Helsinki');

$now = time();
$future = mktime(0, 0, 0, 1, 1, 2024);

$format = "d.m.Y H:i:s";

// echo date($format, $now) . "\n";

// echo date($format, $future) . "\n";

$diff = $future - $now;
// echo $diff . "\n";
// echo ($diff / 60) . "\n";
// echo ($diff / (60 * 60)) . "\n";
// echo ($diff / (24 * 60 * 60)) . "\n";
echo "Until the end of the promotion:\n";

$days = floor($diff / (24 * 60 * 60));
echo "$days days" . "\n";
$rest_of_days = $diff % (24 * 60 * 60);

$hours = floor($rest_of_days/3600);
echo "$hours hours" . "\n";
$rest_of_hours = $diff % (60 * 60);

$minutes = floor($rest_of_hours/60);
echo "$minutes minutes" . "\n";

$seconds = $diff % (60);
echo "$seconds seconds" . "\n"; 