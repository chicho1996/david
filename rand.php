<?php
$check;
$number;
$rand=array();
while(sizeof($rand)<5){
		$number=rand(1,5);
	if(!(in_array($number,$rand)))

	array_push($rand, $number);

}
print_r($rand);

?>