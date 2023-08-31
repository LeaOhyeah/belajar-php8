<?php


$date = new DateTime();

echo PHP_EOL . '===== Function Set =====' . PHP_EOL;

$date->setTime(10, 10, 10); // setTime($hour, $minute, $second)

$date->setDate(2022, 01, 01); // setDate($year, $month, $day)

// setTimestamp($unixTimestamp)
// belum dicoba
var_dump($date);


echo PHP_EOL . '===== Date Interval =====' . PHP_EOL;

$now = new DateTime();
$now->add(new DateInterval("P1Y")); // add 1 year
var_dump($now);

$now2 = new DateTime();
$lastYear = new DateInterval("P1Y");
$lastYear->invert = true;
$now2->add($lastYear); // add -1 year
var_dump($now2);


echo PHP_EOL . '===== Date TimeZone =====' . PHP_EOL;

$timeNow = new DateTime();
$amsterdam = $timeNow->setTimezone(new DateTimeZone('Europe/Amsterdam'));
var_dump($amsterdam);


echo PHP_EOL . '===== Format =====' . PHP_EOL;
$noFormat = new DateTime();
$format = $noFormat->format('l, d F Y H:i:s');
echo $format . PHP_EOL;


echo PHP_EOL . '===== Parse Date Time =====' . PHP_EOL;
$parse = DateTime::createFromFormat('l, d F Y H:i:s', 'Wednesday, 16 August 2023 09:38:09', new DateTimeZone('Asia/Jakarta'));
echo $parse ? var_dump($parse) : 'salah';