<?php
$pushups = 0;
$total = 0;
$timestamp = strtotime("December 31, 2018");

while($pushups < 365) {
  $timestamp = strtotime("+ 1 days", $timestamp);
  $date = date("Y-m-d", $timestamp);
  $pushups++;
  $total = $total + $pushups;
  echo "$date, day $pushups complete, $total total pushups.\n";
}
