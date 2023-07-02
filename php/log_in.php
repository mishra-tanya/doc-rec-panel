<?php
    session_start();
    include_once "config.php";
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    if(!empty($email) && !empty($password)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $sql=mysqli_query($conn,"SELECT * FROM doctor WHERE email='{$email}' AND password='{$password}'");
        if(mysqli_num_rows($sql)>0){
            $row=mysqli_fetch_assoc($sql);
            if($row){
                $_SESSION["doc_id"]=$row["doc_id"]; 
                echo "Successfully login";
            }
           
        }
        else{
            echo "Email and password is incorrect";
        }
    }
    else{
        echo "$email : This is not a valid email";
    }
    }
    else{
        echo "All fields are required";
    }
?>