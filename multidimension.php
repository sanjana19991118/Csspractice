<?php 
   $ students = array(array("CS001","john","M",21),
    array("CS002","Rita","F",22),
    array("CS003","Richard","M",23),
    array("CS004","Albert","M",24),
    array("CS005","Joseph","M",22),
);

$rows =count($students);
echo 'No of rows ='.$rows.'<br/>';

$cols = count($students[0]);
echo 'No of cols='.$cols.'<br/>';

for($row = 0;$row < $rows;$rows++)
{
 for($col = 0;$col<$cols; $col++)
 {
  echo $students[$row][$col].'&nbsp;&nbsp;&nbsp;';
 }
echo '<br>';
}

$students[0][3]= 40;
echo $students[0][3];

?>