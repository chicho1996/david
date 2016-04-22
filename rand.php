<?php
function random($min,$max,$lengthLimit=null){
	$check;
	$number;
	$length=$max-$min+1;

	if ($lengthLimit != null)
		$length = $lengthLimit;	

	$rand=array();
	while(sizeof($rand)<$length){
			$number=rand($min,$max);
		if(!(in_array($number,$rand)))
		array_push($rand, $number);
	}

	return $rand;
}

$data = random(1,5);
$dataLimit = random(1, 5, 2);

print_r( $data );
print_r( $dataLimit );
?>
