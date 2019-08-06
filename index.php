<?php

echo "Hello World!";

?>
<div>
<?php

$string = '45';

$string = (int)$string;

if(is_int($string)){

	echo $string;
} else { echo 'This string is not integer';}

