<?php



	$text = '
			..........
			<span>1</span>
			...
			<a href="./buy">
				Пойти на курс PHP
				<span>35000</span>
			</a>.....';

	function moveTo($str, $find, $start = 0){
		return strpos($str, $find, $start) + strlen($find);
	}


	function readTo($str, $find, $start = 0){
		$stop = moveTo($str, $find, $start);
		return substr($str, $start, $stop - $start - strlen($find));
	}

		$pos = moveTo($text, '<a href="./buy"');
		$pos = moveTo($text, '<span>', $pos);
		$res = readTo($text, '<', $pos);
		echo $res;
	