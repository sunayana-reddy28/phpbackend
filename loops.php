<?php
$fruits = array("apple","orange","banana","cherry");
count($fruits);
echo "using for loop : </br>";
for ($i = 0; $i < count($fruits);$i++){
    echo $fruits[$i]."</br>";
}

echo "<br> using while loop: <br>";
$j = 2;
while($j < count($fruits) ){
    echo $fruits[$j]. "<br>";
    $j++;
}

echo "<br> using foreach loop: <br>";
foreach($fruits as $fruit){
    echo $fruit . "<br>";
}
?>