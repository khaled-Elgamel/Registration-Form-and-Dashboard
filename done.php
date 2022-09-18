<?php

$gender;

if($_POST["gender"]=="male")
{
$gender='Mr';
}
else{
$gender='Miss';
}




echo "<h1>Thanks". " ". $gender ." ".$_POST["fname"]." ".$_POST["lname"]."</h1>";
echo "<h2>Please Review Your Information</h2>";
echo "Name is : ".$_POST["fname"]." ".$_POST["lname"]."<br>";
echo "Address is : " .$_POST["Address"]."<br>";
echo "Your Skills : ".$_POST["skill"]."<br>";
echo "Your department is  : ".$_POST["dep"]."<br>";







    $new_data = array(
        
        "firstName" => $_POST['fname'],
        "lastName" => $_POST['lname'],
        "Email" => $_POST['Uname'],
        "Country" => $_POST['cou'],
        "Gender" => $_POST['gender'],
        "Dept" => $_POST['dep'],

    );
    
    
    if(filesize("names.json") == 0){
        
        $new_record = array($new_data);
        $data_to_save = $new_record; 
    }else{
        
        $old_records = json_decode(file_get_contents("names.json"));

        
        array_push( $old_records , $new_data);

        $data_to_save = $old_records;
    }





    if(!file_put_contents("names.json", json_encode($data_to_save, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)){
        $error = "Error storing data, please try again";
    }else{
    
        $success =  "Your data is stored successfully";
        echo "<br>".$success;
    }





 
   


