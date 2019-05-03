<?php
    $servername = "localhost";
    $username = "root";
    $password = "Booshi708!";
    $dbname = "Jupiter";
    
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if($conn->connect_error){
        die("connected failed". $conn ->connect_error);
    }

    // it dosent work
    
    $sql = 
    "INSERT INTO homework(firstname,lastname,email) VALUE ('naoya','ishida','ishida@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('marie','suzuki','suzuki@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('sadaaki','ishida','sadaaki@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('tomoko','maruyama','tomoko@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('tatsuya','ishida','tomoko@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('yuki','takada','takada@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('akihito','ninomiya','ninomiya@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('aya','maruyama','aya@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('hirohito','ninomiya','hirohito@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('daiki','maruyama','hirohito@gmail.com'),
    INSERT INTO homework(firstname,lastname,email) VALUE ('rika','ishida','hirohito@gmail.com')";
    
    
    if ($conn ->query($sql) === TRUE){
        echo "table created succesfully";
    }else{
        echo "Error";
    }
    
?>