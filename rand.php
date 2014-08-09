<?php


function randomGenerator($min, $max, $num)
{
	$result = array();
	$start = 0;
	do{
		$insert = rand($min, $max);
		if (!in_array($insert, $result)) {
			$result = $insert;
			$start ++;
		}
	} while ($start < $num);

}



function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
