<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo count($arr);

echo "<br>";

$array = [1, 2, 3, 7, 31, 4, 1, 8, 6];
array_splice($array,9,0,array_shift($array));
array_splice($array,9,1,array_shift($array));
array_splice($array,9,2,array_shift($array));
array_splice($array,9,3,array_shift($array));
 echo implode(',',$array);

echo "<br>";

$s=$array[4]+$array[5]+$array[6];
echo $s;

echo "<br>";

$firstArr = [

  'one' => 1,

  'two' => 2,

  'three' => 3,

  'foure' => 5,

  'five' => 12,

];


$secondArr = [

  'one' => 1,

  'seven' => 22,

  'three' => 32,

  'foure' => 5,

  'five' => 13,

  'six' => 37,

];

$result = array_intersect($firstArr, $secondArr);
print_r($result);

echo "<br>";

$firstArr = [

  'one' => 1,

  'two' => [

    'one' => 1,

  'seven' => 22,

  'three' => 32,

  ],

  'three' => [

'one' => 1,

'two' => 2,

  ],

  'foure' => 5,

  'five' => [

   'three' => 32,

   'foure' => 5,

   'five' => 12,

],  

];

function myCounter(array $firstArr) {
	 $counter = 1;
	 foreach($firstArr as $key => $value)
	 {
		 if (is_array($value))
		 {
			 myCounter($value);
		 }
		 else 
		 {
			 if ($counter == 2)
			 {
				 echo '<br>';
				 var_export($value);
			 }
		 }
	 $counter++;
	 }
 }

 myCounter($firstArr);

echo '<br>';


$sum = 0;
array_walk_recursive($firstArr, function($number) use (&$sum) {
    $sum += $number;
});
echo $sum;



?>