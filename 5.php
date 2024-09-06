<?php
$array=["ram","ranu","raja"];
foreach($array as $x){
    echo $x ."\n"; 
}
?>

<?php
$array=[23,32,55];
foreach($array as $x){
    echo $x +2 ."\n"; 
}
?>

<?php
$array1=["xvdx","ferg"];
array_push($array1,"egdf");
print_r($array1);
array_pop($array1);
print_r($array1);
?>
