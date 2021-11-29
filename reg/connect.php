<?php
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','reg');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into regestration(firstname,lastName,gender,age,email,password)
        value=(?,?,?,?,?,?)");
        $stmt->bind_param("sssiss" , $firstname, $lastname,$gender,$age,$email,$password);
        $stmt->execute();
        echo "registration successfully....";
        $stmt->close();
        $conn->close();
    }






?>