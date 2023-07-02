<?php
    session_start();
    include_once "config.php";
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $field=mysqli_real_escape_string($conn,$_POST['typevisit']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    echo $field;

    if(!empty($name) && !empty($field) && !empty($email) && !empty($password) ){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $sql=mysqli_query($conn,"SELECT email FROM doctor WHERE email ='{$email}'");
            if(mysqli_num_rows($sql)>0){
                echo "$email :This email already exists";
            }
            else{
                  $random_id=rand(time(),10000000);
                  $sql2=mysqli_query($conn,"INSERT INTO doctor(doc_id , name , field , email , password ) 
                    VALUES({$random_id},'{$name}','{$field}','{$email}','{$password}')");
                    if($sql2){
                         $sql3=mysqli_query($conn,"SELECT * FROM doctor WHERE email='{$email}'");
                            if(mysqli_num_rows($sql3)>0){
                               $row=mysqli_fetch_assoc($sql3);
                               $_SESSION["doc_id"]=$row["doc_id"]; 
                                  echo "Successfully Signup";
                                  
                                }
                            }   
                            else{
                                    echo "Something went wrong!";
                                }
                        }
                    }
            
        
        else{
            echo "$email is not a valid email";
        }
    }
    else{
        echo "All fields are required";
    }
?>