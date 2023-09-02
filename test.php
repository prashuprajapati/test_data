<?php 
 
 $servername = "localhost";
 $username = "root";
 $password = "12345";
 $dbname = "testdatabase";

 $ conn = new mysqli($servername,$username,$password,$dbname)
 if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
 }

 $sql = "CREATE TABLE contact_form
 (
    username text(10) NOT NULL,
    emailid varchar(60) primary key,
    phone int(10) NOT NULL,
    subj text(10) NOT NULL,
    Massge text(50)
    sub_time time("2023-08-55 11:30:10"), )";

 if (conn->query($sql)==true){
    echo "table create sucessfully";
 }
 else{
    echo"Error creating table:".$conn->error;
 }

 $conn->close();
?>