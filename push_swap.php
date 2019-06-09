<?php
$la = array_slice($argv,1, $argc-1);
$lb =[4, 5, 6, 7];

function swapA(&$la){
	$sa = $la[0];
	$la[0] = $la[1];
	$la[1] = $sa;
}

function swapB(&$lb)
{
	$sb = $lb[0];
	$lb[0] = $lb[1];
	$lb[1] = $sb;
}

function swapC(&$la, &$lb)
{
swapA($la);
swapB($lb);	
}

function pushA(&$la, &$lb)
{
$firstelemlb = array_shift($lb);
 array_unshift($la, $firstelemlb);
}

function pushB(&$la, &$lb)
{
$firstelemla = array_shift($la);
array_unshift($lb, $firstelemla);
}

function rotateA(&$la, &$lb)
{
$firstelemla = array_shift($la);
array_push($la, $firstelemla);
}

function rotateB(&$la, &$lb)
{
$firstelemlb = array_shift($lb);
array_push($lb, $firstelemlb);
}

function rr(&$la, &$lb)
{
rotateA($la, $lb);
rotateB($la, $lb);
}

function rra(&$la, &$lb)
{
$firstelemla = array_pop($la);
array_unshift($la, $firstelemla);
}

function rrb(&$la, &$lb)
{
$firstelemlb = array_pop($lb);
array_push($lb, $firstelemlb);
}

function rrr(&$la, &$lb)
{
rra($la, $lb);
rrb($la, $lb);
}
// swapA($la);
// print_r($la);
// swapA($la);
// pushA($la, $lb);
// pushB($la, $lb);
// rotateB($la, $lb);


// rra($la, $lb);
// print_r($la);
// rra($la, $lb);
// print_r($la);
// echo "\n";

// rrr($la, $lb);
// print_r($la);
// rrr($la, $lb);
// print_r($la);

if($argv[0] > $argv[1])
{
	swapA($la);
	print_r($la);
}

if ($lb[1] > $lb[0])
{
	swapB($lb);
	print_r($lb);
}