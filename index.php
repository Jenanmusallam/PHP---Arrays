<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>PHP</title>
</head>
<body>
<div class=bg-secondary>
<div class="container">
<h1 class="text-center text-light p-5">PHP - Arrays</h1>

    <table class="table table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="width: 12vw;"># </th>
      <th scope="col">Answers</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Q 1</th>
      
<?php
// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script that display the following string -
// "The memory of that scene for me is like a frame of film forever frozen at that
// moment: the red carpet, the green lawn, the white house, the leaden sky. The
// new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $color variables .
function QesOne(){
$color = array(' White ', ' Green ', 'Red ', ' Blue ', ' Black ');
$str1="The memory of that scene for me is like a frame of film forever frozen at that
 moment: the ".$color[2]."carpet, the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The
 new president and his first lady. - Richard M. Nixon";
echo "<td>".$str1."</td>";
}
QesOne();
?>
    </tr>
    <tr class="table-light">
      <th scope="row">Q 2</th>
      
<?php

// 2. $color = array('white', 'green', 'red'')
// Write a PHP script that will display the colors in the following order :
// Output :
// white, green, red,
// ● green
// ● red
// ● white
function QesTwo(){
     $color = array('white', 'green', 'red');
     
      for($x=0;$x<count($color);$x++){

        echo $color[$x]." , ";
     }
     echo "<ul>";
     
     for($x=0;$x<count($color);$x++){

        echo "<li>".$color[$x]."</li>";
     }
echo"</ul>";
}
echo"<td>";
echo QesTwo();
echo "</td>";
?>
    </tr>
    <tr >
      <th scope="row">Q 3</th>
      <?php
// 3. $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
// "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
// "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
// "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
// "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
// "Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
// "Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
// Create a PHP script which displays the capital and country name from the above
// array $cities. Sort the list by the capital of the country.
// Sample Output :
// The capital of Netherlands is Amsterdam
// The capital of Greece is Athens
// The capital of Germany is Berlin
function QesThree(){
$cities= array( 
    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels","Denmark"=>"Copenhagen","Finland"=>"Helsinki",
 "France" =>"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana","Germany" => "Berlin", "Greece" => "Athens", 
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam","Portugal"=>"Lisbon","Spain"=>"Madrid", "Sweden"=>"Stockholm", "United",
"Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech","Republic"=>"Prague","Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
echo "<td>";
 foreach ( $cities as $key => $value ) { 
       echo "The Capital of ". $key." is ". $value." <br> ";
      }
echo "</td>";
}
echo QesThree();
?>

    </tr>
      <tr class="table-light">
      <th scope="row">Q 4</th>
     <?php

// 4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer
// keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
function QesFour($y){
$x = array(1, 2, 3, 4, 5);
unset($x[$y]);
echo "<td>";
var_dump($x);
echo "</td>";
}
QesFour(2);

?>
    </tr>
 <tr>
      <th scope="row">Q 5</th>
     <?php

// 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white
function QesFive(){
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo "<td>";
echo  $color[4];
echo "</td>";
}
QesFive();
?>
    </tr>


     <tr class="table-light">
      <th scope="row">Q 7</th>
     <?php
// 7. Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array :
// 1 2 3 4 5
// After inserting '$' the array is :
// 1 2 3 $ 4 5
function QesSeven(){
$color = array(1,2,3,4,5);
array_splice($color, 3, 0, "$");
 for($x=0;$x<count($color);$x++){
        echo $color[$x]."  ";
     }
}
 echo "<td>";
QesSeven();
 echo "</td>";
?>
    </tr>
     <tr>
      <th scope="row">Q 8</th>
     <?php

// 8. Write a PHP script to sort the following associative array :
// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
// a) ascending order sort by value
// b) ascending order sort by Key
// c) descending order sorting by Value
// d) descending order sorting by Key
function QesEight(){
$str1 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
sort($str1);
echo"<ul>";
echo "<li>";
echo "Ascending order sort by value ==>  ";
 foreach ( $str1 as $key => $value ) { 
    
       echo " ". $value." <  ";
      }
      echo "</li>";
      echo "<li>";
      echo "Ascending order sort by Key ==>  ";
      $str2 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($str2);
 foreach ( $str2 as $key => $value ) { 
    
       echo " ". $key." -  ";
      }
      echo "</li>";
 echo "<li>";
 echo "Descending order sorting by Value ==>  ";
      $str3 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
rsort($str3);
 foreach ( $str3 as $key => $value ) { 
    
       echo " ". $value." >  ";
      }
      echo "</li>";

       echo "<li>";
       echo "Descending order sorting by Key ==>  ";
      $str4 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($str4);
 foreach ( $str4 as $key => $value ) { 
    
       echo " ". $key." -  ";
      }
      echo "</li>";
echo"</ul>";
}
echo "<td>";
QesEight();
echo "</td>";
?>
    </tr>
     <tr class="table-light">
 <th scope="row">Q 9</th>
     <?php

// 9. Write a PHP script to calculate and display average temperature, five lowest
// and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
// 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6
// List of seven lowest temperatures : 60, 62, 63, 63, 64,
// List of seven highest temperatures : 76, 78, 79, 81, 85,
function QesNine(){
    
$a = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$a = array_filter($a);
if(count($a)) {
    echo "Average : " .$average = array_sum($a)/count($a)."<br>";
}

echo "Lowest : ";
$lowest= array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
sort($lowest);
for($x=0;$x<7;$x++){
    echo $lowest[$x]." , ";
}
echo "<br>";
echo "Highest : ";
$highest= array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
rsort($highest);
for($x=0;$x<7;$x++){
    echo $highest[$x]." , ";
}
}

echo "<td>";
QesNine();
echo "</td>";



?>
    </tr>
     <tr>
     <th scope="row">Q 11</th>
     <?php


// 11. Write a PHP program to merge the following two arrays.
// Sample arrays :
// $array1 = array(array(70,40), array(25, 45));
// $array2 = array("example", "com");
// Expected Output :
// Array
// (
// [0] => Array
// (
// [0] => example
// [1] => 70
// [2] => 40
// )
// [1] => Array
// (
// [0] => com
// [1] => 25
// [2] => 45
// )
// )
function QesTen(){
$array1 = array(array(70,40), array(25, 45));
$array2 = array("example", "com");
$newarray1=array();
array_push($newarray1,$array2[0],$array1[0][0],$array1[0][1]);
echo "Array 1 : ";
print_r($newarray1);
$newarray2=array();
array_push($newarray2,$array2[1],$array1[1][0],$array1[1][1]);
echo "<br> Array 2 : ";
print_r($newarray2);
}
echo "<td>";
QesTen();
echo "</td>";
?>
    </tr>
     <tr class="table-light">
     <th scope="row">Q 12</th>
     <?php

// 12. Write a PHP function to change the following array's all values to upper or
// lower case.
// Sample arrays :
// $color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// Expected Output :
// Values are in lower case.
// Array ( [A] => blue [B] => green [c] => red )
// Values are in upper case.
// Array ( [A] => BLUE [B] => GREEN [c] => RED )
function QesEleven($input, $uesCase)
 {
   $case = $uesCase;
   $new = array();
 if (!is_array($input))
 {
 return $new;
 }
 foreach ($input as $key => $value)
 {
 if (is_array($value))
 {
 $new[$key] = QesEleven($value, $case);
  continue;
 }
 $new[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
 return $new;
 }
 echo "<td>";
 $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
 $myColor = QesEleven($Color,CASE_LOWER);
 echo " Lower Case => ";
 print_r($myColor);
 echo "<br>";
 $myColor = QesEleven($Color,CASE_UPPER);
 echo " Upper Case => ";
 print_r($myColor);
echo "</td>";
     
?>
    </tr>
     <tr>
     <th scope="row">Q 13</th>
     <?php

// 13. Write a PHP script which displays all the numbers between 200 and 250 that
// are divisible by 4.
// Note : Do not use any PHP control statement.
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248
function Qes13(){
$str = array();
for($y=200;$y<250;$y+=4){
array_push($str,$y);
}
for($x=0;$x<count($str);$x++){
    echo $str[$x]." , ";
}
}
echo "<td>";
Qes13();
echo "</td>";
?>
    </tr>
     <tr class="table-light">
   <th scope="row">Q 14</th>
     <?php

// 14. Write a PHP script to get the shortest/longest string length from an array.
// Sample arrays : ("abcd","abc","de","hjjj","g","wer")
// Expected Output : The shortest array length is 1. The longest array length is 4.
function Qes14(){
$str = array("abcd","abc","de","hjjj","g","wer");
$longest=array_map('strlen',$str);
echo " The shortest array length is ".min($longest);
echo "<br> The longest array length is ".max($longest);
}
echo "<td>";
Qes14();
echo "</td>";
?>
    </tr>
     <tr>
<th scope="row">Q 15</th>
     <?php

// 15. Write a PHP script to generate unique random numbers within a range.
// Sample Range : (11, 20)
// Sample Output : 17 16 13 20 14 19 18 15 11 12
function Qes15(){
    $numbers = range(11, 20);
    shuffle($numbers);
    
    $num= array_slice($numbers, 0, 10);
    for($x=0;$x<count($num);$x++){
     echo $num[$x]." ";
    }
}
echo "<td>";
Qes15();
echo "</td>";

?>
    </tr>
     <tr class="table-light">
    <th scope="row">Q 16</th>
     <?php

// 16. Write a PHP script to get the largest key in the array.
function Qes16(){
    $num= array("Jenan"=>"24","Website"=>"php");
    $largest=max(array_keys($num));
    echo $largest;
}
echo "<td>";
Qes16();
echo "</td>";



?>
    </tr>
     <tr>
    <th scope="row">Q 17</th>
     <?php

// 17. Write a PHP function that returns the lowest integer in the array that is not 0.
function Qes17(){
    $num=array(10,0,20,3,5,8);
   $minArray= min(array_diff(array_map('intval',$num), array(0)));
   echo  "Lowest integer in ".$minArray . " ";
}
echo "<td>";
Qes17();
echo "</td>";

?>
    </tr>
    <tr class="table-light">
    <th scope="row">Q 18</th>
     <?php

// 18. Write a PHP function to floor decimal numbers with precision.
// Note: Accept three parameters number, precision, and $separator
// Sample Data :
// 1.155, 2, "."
// 100.25781, 4, "."
// -2.9636, 3, "."
// Expected Output :
// 1.15
// 100.2578
// -2.964

function Qes18($n1, $n2, $dot)
{
  $num=explode($dot, $n1);
  $num[1]=substr_replace($num[1],$dot,$n2,0);
if($num[0]>=0)
{ 
     $num[1]=floor($num[1]);
}
else
{  
    $num[1]=ceil($num[1]);
}

  $ceil= array($num[0],$num[1]);
  echo implode($dot,$ceil);
 }
echo "<td>";
print_r(Qes18(1.155, 2, ".")."<br>");
print_r(Qes18(100.25781, 4, ".")."<br>");
print_r(Qes18(-2.9636, 3, ".")."<br>");
echo "</td>";
?>
    </tr>
 <tr>

        <th scope="row">Q 19</th>
     <?php

// 19. Write a PHP script to print "second" and Red from the following array.
// Sample Data :
// $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
// "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
// "holes" => array ( "First", 5 => "Second", "Third"));
function Qes19(){
     $color = array ( 
"color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
   echo  " ".$color["holes"][5] . "  ";
   echo  "/ ".$color["color"]["a"] . " ";
}
echo "<td>";
Qes19();
echo "</td>";

?>
    </tr>
     <tr class="table-light">
  <th scope="row">Q 20</th>
     <?php
// 20. Write a PHP function to sort an array according to another array acting as a
// priority list.
function Qes20(){
$arr = array(
    0 => array(
      'name' => 'Jenan',
      'age' => '24'
    ),
    1 => array(
      'name' => 'Heba',
      'age' => '26'
    ),
    2 => array(
      'name' => 'Razan',
      'age' => '22'
    ),
3=>array(
      'name' => 'Anghami',
      'age' => '28'
    ),
);
//برتهم متل م بدي 
$priority = array('22', '26', '24','28');

usort($arr, function($a, $b) use($priority) { 
    return array_search($a['age'], $priority) <=> array_search($b['age'], $priority);
});
print_r($arr);
}
echo "<td>";
Qes20();
echo "</td>";


?>
    </tr>
 <tr>

        <th scope="row">Q 24</th>
     <?php
// 24. Write a PHP script to sort an array using case-insensitive natural ordering.

function Qes24(){
    $array = array('','Jenan', 'Razan', 'Heba', 'Anghami', 'Taima', 'Maisam');
natcasesort($array);
echo " Using Case-Insensitive Natural Ordering : ";
print_r($array);
}
echo "<td>";
Qes24();
echo "</td>";



?>
    </tr>
  </tbody>
</table>
</div></div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
