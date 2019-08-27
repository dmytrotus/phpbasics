<?php

$cat = [
	'weight' => 1,
	'eat' => function($kgs)
	{

		echo 'Cat ate.'.$kgs.'kilograms of meal';
	}
];

echo $cat['eat'](2);