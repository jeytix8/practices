<?php
include_once 'index.php';

echo identity("Jay", 24);
echo '<br/><br/>';

// Class Output | OOP
$pupil = new student;
echo $pupil->getName().'<br/>';
$pupil->setName('Jt');
echo $pupil->getName();
?>