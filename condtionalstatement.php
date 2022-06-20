<?php

//if statement
$num=35;
if ($num< 87){
    echo "$num is less than 87";
}
echo "<br>";
$num1=20;
if ($num>$num1){
    echo "$num is greater than $num1";
}
echo "<br>";
//if .... else statement
if ($num< 95){
    echo "$num is less than 95";
}else{
    echo "$num is greater than 95";
}
echo "<br>";
//if ...elseif else statement
echo "<br>";
$marks=85;
if ($marks<=29 && $marks>=0) {echo "You have failed";}
elseif ($marks<=100 and $marks>=85) {echo"You have passed";}
elseif ($marks<=84 and $marks>=60) {echo "Good try";}
elseif ($marks<=59 and $marks>=40) {echo "Work hard";}
elseif ($marks<=39 and $marks>=30) {echo "See me";}
else
{echo"invalid number";}
echo "<br>";

//Custom
echo "<br>";
$Grade =66;
if ($Grade>=85 and $Grade<=100){echo "A";}
elseif ($Grade>=80 and $Grade<=84){echo "A-";}
elseif ($Grade>=75 and $Grade<=79){echo "B+";}
elseif ($Grade>=65 and $Grade<=74){echo "B";}
elseif ($Grade>=60 and $Grade<=64){echo "B-";}
elseif ($Grade>=55 and $Grade<=59){echo "C+";}
elseif ($Grade>=50 and $Grade<=54){echo "C";}
elseif ($Grade>=45 and $Grade<=49){echo "C-";}
elseif ($Grade>=35 and $Grade<=44){echo "D+";}
elseif ($Grade>=30 and $Grade<=34){echo "D";}
elseif ($Grade>=25 and $Grade<=29){echo "D-";}
elseif ($Grade>=0 and $Grade<=24){echo "E";}
else
{echo"Invalid Grade";}
