<?php

        $conn = mysqli_connect("localhost", "root", "", "insurance");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $password = $_REQUEST['password'];
        $email =  $_REQUEST['email'];

        $sql = "INSERT INTO admin VALUES ('id','$name',
            '$email','$password')";

        if(mysqli_query($conn, $sql)){
          $status = "Admin Added Successfully.";
     header('Location:addadmin.php');
          return;
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
