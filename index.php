<?php
$fname = "Jay tee";
$age = 23;
$height = 1.74;
$personinfo = array($fname,$age,$height);


// Show array
print_r( $personinfo);
echo '<br>';
echo $personinfo[1];
echo '<br/><br/>';

// Show variable
var_dump( $personinfo);
echo '<br/><br/>';

// String replacement
echo str_replace(" ", "_", $fname);
echo '<br/><br/>';

// String position
echo strpos($height, "4");
echo '<br/><br/>';

// constant variable
define("fav", "Sisig");
echo fav;
echo '<br/><br/>';

//switch case
switch($age){
    case 1:
        echo 'hey 1';
    case 2:
        echo 'hey 2';
    case 22:
        echo 'hey 22';
        break;
    case 3:
     echo 'hey 3';
    default:
    echo 'not '.$fname;
}
echo '<br/><br/>';



// While Loop
$i = 0;
while($i<=$age){
    echo 'I am now '.$i.' years old.<br/>';
    $i++;
}
echo '<br/>';
echo '<br/>';

//Do While
$x = 0;
do{
    echo 'I am now '.$x.' years old.<br/>';
    $x++;
}while($x<$age);
echo '<br/>';
echo '<br/>';

// For Loop
for($i = 0; $i<5; $i++){
    echo $i;
}
echo '<br/> <br/>';

// Foreach, specially for array
foreach($personinfo as $info){
    echo $info.'<br/>';
}
echo '<br/> <br/>';

// Array counts || length?
$indexcount = count($personinfo);
echo $indexcount;
echo '<br/> <br/>';

// for loop array
for($i = 0 ; $i < $indexcount; $i++){
    echo $personinfo[$i].'<br/>';
}
echo '<br/> <br/>';

// Array Labeling
$person = array("firstName" => $fname, "age" => $age, "height" => "5'7");
print_r($person);
echo '<br/>';
echo $person['height'];
echo '<br/> <br/>';

// sort array
$numbers = [10, 2, 3, 4, 1, 5, 7, 6, 8, 9];
sort($numbers);
print_r($numbers);
echo '<br/>';

// search in_array
if(in_array("Jay tee", $person)){
    echo 'Found!';
}
else{
    echo 'Not Found!';
}
echo '<br/> <br/>';

// Date
date_default_timezone_set("Asia/Manila");
echo date('Y/m/d/D | h:i:s a');
echo '<br/> <br/>';

// Function
function printName(){
    echo "I am Jay Tee";
}
printName();
echo "<br/>";

function sum($a, $b){
    return $a + $b;
}
echo sum(20, 3);
echo "<br/>";

function identity($name, $old){
    if($name = 'Jay Tee' && $old == 23){
        echo 'This is me!';
    }
    else{
        echo 'Not Me!';
    }
}
identity($fname, $age);
echo "<br/>";

// Include
include 'index2.php';
echo '<br/> <br/>';

// Class | OOP
class student{
   var $name = "Jay";

   function setName($newName){
    $this->name = $newName;
   }

   function getName(){
    return $this->name;
   }

}
// class passed in index2.php and output, but re-output in here due to include above from index 2 with a new student
$pupil2 = new student;
$pupil2->setName('Jerev');
$classmate = $pupil->getName().' and '.$pupil2->getName().' are classmate.';
echo $classmate;
echo '<br/>';

//extends inherit the other class' methods
class intern extends student{
    var $age;

    function setAge($newAge){
        $this->age = $newAge;
    }
    function getAge(){
        return $this->age;
    }
}
$pupil3 = new intern;
$pupil3->setAge(19);
$pupil3->setName("TJ");
echo 'I am a student applying for internship, my name is '.$pupil3->getName().', I am '.$pupil3->getAge().' years old.';

echo '';
echo '<br/> <br/>';
echo '<br/> <br/>';
?>

