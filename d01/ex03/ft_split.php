#!/usr/bin/php

<?php
function ft_split($arr)
{
	$result = preg_split('/[\s]+/', $arr);
	if ($arr != NULL)
		sort($result);
	return ($result);
}
?>