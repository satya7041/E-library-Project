<?php
        $connection = mysqli_connect('localhost:3306','root','','phpdata');

        mysqli_select_db($connection,"phpdata");
        
        $name = $_POST['name'];
        $email = $_POST['email'];
       $phone = $_POST['phone'];
       $msg = $_POST['Message'];
        $query = "INSERT INTO `userdata`(`name`,`email`,`phone`,`msg`) VALUES ('$name','$email','$phone','$msg')";     
        mysqli_query($connection,$query);
        echo "MESSAGE IS SENT";

        header("Refresh: 2; http://localhost/ProjectM/");
        exit;


?>