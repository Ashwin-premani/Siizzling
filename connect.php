<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $table=$_POST['table'];
    $email=$_POST['email'];
    $number=$_POST['number']; 
    $date=$_POST['date'];
    $time=$_POST['time'];

    //DataBase
    $conn= new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection failed: '.$conn->connect_error);

    }
    else{
        $stmt = $conn->prepare("Insert into registration(firstName,lastname,table,email,number,date,time)")
            values(?,?,?,?,?,?,?);
        $stmt->bind_param("ssisiii",$firstName,$lastName,$table,$email,$number,$date,$time);
        $stmt->execute();
        echo"Reserved";
        $stmt->close();
        $conn->close();
    }
?>