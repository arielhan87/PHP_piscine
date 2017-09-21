#!/usr/bin/php
<?php
	include("ft_is_sort.php");

	$tab = array("aa", "bb", "cc");
	$tab[] = "HEllo this is mine";

	if (ft_is_sort($tab)){
		echo "This array has been sorted";
	} else {
		echo "You need to sort the array soon!";
	}
?>