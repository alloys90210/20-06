<?php
$fruits= "Grapes";
$marks= "13";
switch ($marks) {
    case "$marks<=25 and $marks>=0":
        echo "I love Mangoes";
        echo "<br>";
        echo "Fresh";
        break;

    case "$marks<=50 and $marks>=26":
        echo "But I prefer grapes";
        echo "<br>";
        echo "To Mangoes";
        break;

    case "$marks<=75 and $marks>=51":
        echo "I love bananas too";
        echo "<br>";
        echo "But not as much";
        break;

    case "$marks<=100 and $marks>=76":
        echo "Not forgetting oranges";
        echo "<br>";
        echo "Fresh too";
        break;

    case "$marks<=125 and $marks>=101":
        echo "I love thorn melon too";
        echo "<br>";
        echo "Acquired taste";
        break;
    default:
        echo "Its not in the list";}