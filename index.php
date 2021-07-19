<?php

echo "Get remainder of division (7 divided by 3) = ". 7%3 . "<br>";

echo "Get the whole part of the addition (7 divided by 7.15) = " .(int) (7+7.15). "<br>";

$num = sqrt(25) . "<br>";


echo "SQRT from 25 = ". $num. PHP_EOL;

$string = "Десять негритят пошли купаться в море";

$array = explode(" ",$string);
echo "4 word from string = ". $array[3]. "<br>" ;

$charstring=mb_substr($string,17,1);
echo "17 char opn string = " . $charstring . "<br>";

$Capitalletters = mb_convert_case($string, MB_CASE_TITLE, 'UTF-8'). PHP_EOL;
echo "Capital letters = " . $Capitalletters . "<br>";

$linelength = mb_strlen($string);
echo "Line length = " .  $linelength . "<br>";

//echo assert (true == 1);
echo "Equation (true equals 1) = ";
if (true == 1) {
    echo "true". "<br>";
} else {
    echo "false". "<br>";
}
//"<br>"


echo "Equation (false equals 0) = ";
if (false === 0) {
    echo "true". "<br>";;
} else {
    echo "false". "<br>";;
}
$word1 = mb_strlen(three);
$word2 = mb_strlen(три);

echo "Equation (three long три ) = ";
if ($word1 < $word2) {
    echo "true". "<br>";
} else {
   echo "false". "<br>";
}

$example = 125*13+7;
$example2 = 223+28*2;
//echo $example ;
//echo $example2 ;
echo "Equation (125*13+7)<(223+28*2) = ";
if ($example2 < $example) {
    echo "true". "<br>";
} else {
    echo "false". "<br>";
}

