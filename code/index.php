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

//15
function printStringReturnNumber()
{
    echo "<br>Return number";
    return 44;
}
echo "<br>" . $my_num = printStringReturnNumber();

//16
function increaseEnthusiasm($s = "null")
{
    return $s . "!";
}
echo "<br>" . increaseEnthusiasm("NUTELLA");

function repeatThreeTimes($s = "null")
{
    return $s . $s . $s;
}
echo "<br>" . repeatThreeTimes("POTATO");
echo "<br>" . increaseEnthusiasm(repeatThreeTimes("BANANA"));

function cut($s = "null", $length = 10)
{
    return substr($s,0,$length);
}

$array5 = [4,-2,5,19,-130,0,10];
function sequence($array5, $k)
{
    if($k >= count($array5)) return;

    echo $array5[$k];
    sequence($array5, ++$k);
}
echo sequence($array5,0);

$num=321; 
function SUM_OF_DIGITS($num,$sum=0)
{
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    echo "$sum ";
    if ($sum>9)
        SUM_OF_DIGITS($sum);
    else return;
}
echo SUM_OF_DIGITS($num);

//17
$array6 = [];
$count = 10;

for ($i = 0; $i < $count; $i++)
{
    $str_counter = $i;
    $str_counter++;
    $temp_str = str_repeat('x', $str_counter);

    array_push($array6, $temp_str);

}

function arrayFill($val, $count){
    $array7 = [];
    for($i = 1; $i <= $count; $i++){
        array_push($array7, $val);
        echo $array7[$i-1], " ";
    }
    return $array7;
}
arrayFill("XX", 7);

$two_arr = [[1, 2, 3], [4, 5], [6]];
$amount = 0;
for ($i = 0; $i < count($two_arr); $i++){
    $amount += array_sum($two_arr[$i]);
}
echo $amount;

$array8 = array();
for($i = 0; $i < 3; $i++){
    $t_arr = [];
    for($j = 0; $j < 3; $j++){
        array_push($t_arr, $i * 3 + $j + 1);
    }
    array_push($array8, $t_arr);
}

$array9 = [2, 5, 3, 9];
$result = $array9[0] * $array9[1] + $array9[2] * $array9[3];
echo $result;

$user = array(
    'name' => 'Enestesi',
    'surname' => 'Ignatusha',
    'patronymic' => 'Mikhalna'
);
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'];

$date = array(
    'year' => '2022',
    'month' => 'February',
    'day' => '22'
);
echo $date['year'], "-", $date['month'], "-", $date['day'];

$array10 = ['a', 'b', 'c', 'd', 'e'];
echo count($array10) . "<br>";
echo $array10[count($array10) - 1];
echo $array10[count($array10) - 2];

//18
function sum10(int $x, int $y): bool
{
    return ($x+$y > 10);
}

function equal(int $x, int $y): bool
{
    return ($x==$y);
}

$age = 63;
if($age < 10 or $age > 99)
    echo "Число не попадает в диапазон";
else{
    $sum = 0;
    while ($age > 0){
        $sum += $age % 10;
        $age /= 10;
    }
    if ($sum < 10)
        echo "Сумма цифр однозначна<br>";
    else
        echo "Сумма цифр двузначна<br>";
}
$array11 = [1, 2, 3];
if (count($array11) == 3)
    echo array_sum($array11);

//19
