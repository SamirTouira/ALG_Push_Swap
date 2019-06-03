<?php
$la = array_slice($argv,1, $argc-1);
$lb =[4, 5, 6];

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

function rotateA()
{

}

function rotateB()
{

}
// swapA($la);
// print_r($la);
// swapA($la);
// pushA($la, $lb);
pushB($la, $lb);
// swapC($la, $lb);
print_r($la);
print_r($lb);
echo "\n";