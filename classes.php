<?php

class MyClass {

	public $somestring = 'Some beautiful string';

	protected $protected = 'Protected';

	private $private = 'Private';

	function showProtectedVariable()
	{
		echo $this->protected;
	}

	function showPrivatVariable()
	{
		echo $this->private;
	}

	

	};

$obj = new MyClass();

echo 'This is public variable - '.$obj->somestring.'<br/>';

echo 'This is protected variable - ';

echo $obj->showProtectedVariable().'<br/>';

echo 'This is private variable - ';

echo $obj->showPrivatVariable();

?>