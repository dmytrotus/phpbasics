<?php



	class Parser{
		protected $text; 
		protected $pos;


		public function __construct($text){
			$this->text = $text; 
			$this->pos = 0;
		}

		public function moveTo($find){
			$this->pos = strpos($this->text, $find, $this->pos) + strlen($find);
			return $this;
		}

		public function readTo($find){
			$start = $this->pos;
			$this->moveTo($find);
			return substr($this->text, $start, $this->pos - $start - strlen($find));
		}
	}

	$text = '
			..........
			<span>1</span>
			...
			<a href="./buy">
				Пойти на курс PHP
				<span>3522000</span>
			</a>.....

			..........
			<span>1</span>
			...
			<a href="./buy">
				Пойти на курс PHP
				<span>222</span>
			</a>.....

			..........
			<span>1</span>
			...
			<a href="./buy">
				Пойти на курс PHP
				<span>11</span>
			</a>.....

			..........
			<span>1</span>
			...
			<a href="./buy">
				Пойти на курс PHP
				<span>444</span>
			</a>.....';

	$parser = new Parser($text);

	for ($i=0; $i < 10; $i++) {
		echo ' '; 
		echo $parser->moveTo('<a href="./buy">')->moveTo('<span>')->readTo('<');
		echo ',<br/>';
	}

	