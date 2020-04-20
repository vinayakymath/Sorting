<?php
$zonesort = array();
$zonesort[] = array( 'id' => '1', 'status' => '2', 'time' => '1m');
$zonesort[] = array( 'id' => '2', 'status' => '1', 'time' => '2m');
$zonesort[] = array( 'id' => '3', 'status' => '1', 'time' => '3m' );

// want to sort by status and wait_time - so need arrays for the 'keys' we want to sort by
$status = array();
$time = array();
for ($i = 0; $i < count($zonesort); $i++) {
$status[] = $zonesort[$i]['status'];
$time[] = $zonesort[$i]['time'];
}
// now apply sort
array_multisort($status, SORT_ASC, SORT_NUMERIC,
$time, SORT_ASC,
$zonesort);

for ($i = 0; $i < count($zonesort); $i++) {
var_dump($zonesort[$i]['id']);
}
// var_dump($zonesort);
// sorted results will be in $zonesort now in status+wait_time order!!
?>
