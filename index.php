<?php

$arr=array("PHP", "Open Source", "ITI", "Day2", "Arrays");


foreach ($arr as $a) {
  echo $a ." ";
}

echo "<br>";
echo "<br>";

for($i=0;$i< count($arr); $i++ ){
    echo $arr[$i]." ";
   }

echo "<br>";
echo "<br>";

$info=["Name"=>"khaled","Email"=>"Kelgamel67@gmail.com","Age"=>21,"Collage"=>"Benha"];

echo "<table>";
foreach($info as $key=>$value) {
    echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "</table>";





echo "<br>";
echo"Sort Array Ascending Order According to Key : <br>";

ksort($info);
foreach ($info as $key=>$value){
    echo $key." : ". $value."<br>";
}

echo "<br>";
echo"Sort Array Ascending Order According to value : <br>";

asort($info);
foreach ($info as $key=>$value){
    echo $key." : ". $value."<br>";
}
echo "<br>";
echo "<br>";




echo "function array_keys() : <br>";
print_r(array_keys($info));





















?>


<style>

td,th{


border-radius: 1px;
border: solid black;

}
table{
    border-collapse: collapse;
}

</style>



   
