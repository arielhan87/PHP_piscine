<?php
	function ft_is_sort($arr)
	{	
		$sorted_arr = $arr;
		sort($arr);
		if ($sorted_arr === $arr)
			return (true);
		else
			return (false);
	}
?>