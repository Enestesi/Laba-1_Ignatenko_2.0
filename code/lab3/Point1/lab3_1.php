<?php
//a
$regex = "/a..b/";
echo preg_match($regex, "ahb acb aeb aeeb adcb axeb");
//b
echo preg_replace_callback('#(\d+)#', 'cube', 'a1b2c3');
function cube($matches)
{
    $Num = pow($matches[0], 3);
    return $Num;
}