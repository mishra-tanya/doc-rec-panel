<?php 
    include_once "config.php";
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $sex=mysqli_real_escape_string($conn,$_POST['flexRadioDefault']);
    $visit=mysqli_real_escape_string($conn,$_POST['typevisit']);
    echo $name;
    if(!empty($name) && !empty($age) && !empty($sex) && !empty($visit)){
        $sql=mysqli_query($conn,"INSERT INTO showdata(name, age,sex, tovisit)
        VALUES ('{$name}',{$age},'{$sex}','{$visit}')");
        
    }else{
        echo "All fields are required";
    }

?>