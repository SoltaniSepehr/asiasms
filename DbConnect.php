<?php

    function connectDB(){
        $servername = "localhost";
        $username = "sepehrtest";
        $password = "09103140035";
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
      //  echo "Connected successfully";
    }
?>