<html>
<?php
//create some strings
$mytext1 = "Good morning!";
$mytext2 = "Hello";
//output string variables on lines
echo "The first string is";
echo $mytext1;
echo "<br></br>";
echo "The second string is";
echo $mytext2;
echo"<br></br>";


$posworld = strpos($mytext1, "morning");
$lngmytext1 = strlen($mytext1);
$lngmytext2 = strlen($mytext2);

echo "the number of chars in the second string is ";
echo $lngmytext1;
echo "<br></br>";
echo "second string length is ";
echo $lngmytext2;
echo "<br></br>";
echo "the word morning in the first string starts at position ";
echo $posworld + 1;
echo " in the first string <br></br>";

echo "We can put two strings together: <br/><br/>";
echo ($mytext1). " " .($mytext2). "\n";

$part = substr($mytext1,$startpoint 0,$length 4)


?>