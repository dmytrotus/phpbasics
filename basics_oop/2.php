<?php

class Cat
	{
		public $weight = 1;

		public function eat($kgs){
			$this->weight = $kgs + $this->weight;
			echo 'Cat ate.'.$kgs.' kilograms of meal';
			echo ' Cat"s weight is .'.$this->weight.' kilograms now';
		}
	}


	$cat = new Cat();

	echo $cat->eat(2);

