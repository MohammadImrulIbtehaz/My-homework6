 <?php 
 /* for($i=0; $i<14; $i++){
    echo "My name is Orvee <br>";
}*/



/*$educationStart =2004;
$educationEnd =2023;
for($i=$educationStart; $i<=$educationEnd; $i++){
    echo "Pass <br>";
}*/
 ?>
 


 <select>
 <option value="">Select one</option>
 <?php
 
 for($i=2004; $i<=2024; $i++){
     echo "<option>$i</option>";
 }
 ?>
 </select>
 
<br>
<br>
<br>
 <?php

 $num=22;
 for($i=0; $i<=10; $i++){
    $result=$num*$i;
    echo "$num * $i=$result <br>";
 }
 ?>
<br>
<br>
<br>


 <?php
 $arr=[
    'Name',
    'Address',
    'Age',
    'Institute',
    'Religion'
 ];
 $len =count($arr);
 for ($i=0; $i<$len; $i++){
    echo $arr[$i] . "<br>";
 }
 ?>

 <?php

 for($i=10; $i>=1; $i--){
    $result=str_repeat("*",$i);
    echo $result ."<br>";
 }
 ?>


<?php


function createPyramid($numRows=12)
{
    for ($i = 1; $i <= $numRows; $i++) {
        
        for ($j = $numRows - $i; $j > 0; $j--) {
            echo "&nbsp;&nbsp;&nbsp";
        }

       
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "* ";
        }

        echo "<br>";
    }
}

createPyramid();
?>

<?php

function createRectangle($rows=8,$cols=12){
for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$cols; $j++){
        echo "*";
    }
    echo "<br>";
}
}
createRectangle();
