<?php
$students=array("N"=>"Nihal","F"=>"Fadalu","A"=>"Abhishek","Z"=>"Zamil","B"=>"Basil");

echo"<h1>Student Names Sorting </h1>";
echo "<h2>";
print_r($students);
echo "<br><br>";

echo "Names sorted using asort : <br>";
asort($students);
print_r($students);
echo "<br><br>";

echo "Names sorted using arsort : <br>";
arsort($students);
print_r($students);
echo "</h2>";
?>