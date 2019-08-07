<?php

	abstract class Car
	{
		abstract public function speed();
	}


	class BMW extends Car
	{
		public function speed()
		{
		  echo 200;
		}

		public function color()
		{
			echo 'Red';
		}
	}

	class Mercedes extends Car
	{
		public function speed()
		{
		  echo 150;
		}

		public function color()
		{
			echo 'Black';
		}
	}


	$Bmw = new BMW();
	$Mercedes = new Mercedes();


	$Bmw->speed();
	$Bmw->color();
	$Mercedes->speed();
	$Mercedes->color();
?>