<?php
    $servername = "localhost";
    $username = "root";
    $password = "Booshi708!";
    $dbname = "Jupiter";
    
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if($conn->connect_error){
        die("connected failed". $conn ->connect_error);
    }
    
    $sql = "CREATE TABLE homework(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
    
        if ($conn ->query($sql) === TRUE){
            echo "table created succesfully";
        }else{
            echo "Error";
        }
    
        $conn ->close()

?>