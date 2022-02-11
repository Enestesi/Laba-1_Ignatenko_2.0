<?php
//1
/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= "abcdf";
// Don't change the line below
echo "<br>Your order is:$very_bad_unclear_name.";

//2
$num1 = 1;
echo $num1 . "<br>";
$num2 = 2;
echo $num2;
$num3 = 3.123;
echo " " . $num3;
echo (3+9);
$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month);

//11
$num_languages = 3;
$months=11;
$days = $months*16;
$days_per_language=$days/$num_languages;
echo "<br>" . $days_per_language;

//12
echo 8**2;

//13
$my_num = 16;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

//14%
$a = 10; $b=3;
echo "<br>" . ($a%$b);
if ($a%$b==0)
    echo "<br>Делится<br>";
else echo "<br>Делится с остатком<br>" . ($a%$b); 

//14sqrt_pow
echo $st=pow(2,10) . "<br>";
echo sqrt(245) . "<br>";
$array=[4,2,5,19,13,0,10];
$sum = 0;
foreach($array as $item)
    $sum+=$item**2;
echo sqrt($sum) . "<br>";

//14round_ceil_floor
echo sqrt($sum) . "<br>";
echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "<br>";
$array1=[
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587))
];

//14min_max
$array2 = [4,-2,5,19,-130,0,10];
$minimum = min($array2);
$maximum = max($array2);

echo rand(1,100) . "<br>";

$random_arr = array();
for ($i=0; $i < 10; $i++) {
    $random_arr[$i] = rand();
}

//14abs
$a = 4;
$b = 23;
$difference = abs($a-$b);

$array3 = [1, 2, -1, -2, 3, -3];
foreach ($array3 as $num) {
    $num = abs($num);
}

//14general
$num = 32;
$divider = [];
for ($i=1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        array_push($divider, $i);
    }
}

$array4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$j=0;
$sum=0;
while ($sum <= 10){
    $sum+=$array4[$j];
    $j++;
}