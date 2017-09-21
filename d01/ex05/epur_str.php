#!/usr/bin/php

<?php
	$var = $argv[1];
	$print = preg_split('/\s+/',$var); 
	$result = implode(" ", $print);
	echo $result;
?>
