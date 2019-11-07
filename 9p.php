<?php

$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";

$stateArray = [];

$state1 = explode(' ',$allTheStates);

$i = 0;



//ends with 'xas'

foreach($state1 as $state)

{

	if(preg_match('/xas$/',($state)))

	{

		$stateArray[$i] = ($state);

		$i = $i + 1;

		print "the state that ends with 'xas' : ". $state;

	}

}



//begins with k ends with s 

foreach($state1 as $state)

{

	if(preg_match('/^k.*s$/i',($state)))

	{

		$stateArray[$i] = ($state);

		$i = $i + 1;

		print "the state that begins with 'k' ends with 's' : ". $state;

	}

}

//begins with 'M' ends with 's'

foreach($state1 as $state)

{

	if(preg_match('/^M.*s$/',($state)))

	{

		$stateArray[$i] = ($state);

		$i = $i + 1;

		print "the state that begins with 'M' and ends with 's' : ". $state;

	}

}

//ends in a

foreach($state1 as $state)

{

	if(preg_match('/a$/',($state)))

	{

		$stateArray[$i] = ($state);

		$i = $i + 1;

		print "the state the ends with 'a' : ". $state;

	}

}



foreach($stateArray as $elements => $value)

{

	print("\n".$value."is the element".$element);

}

?>