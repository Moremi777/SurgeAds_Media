<?php

    try{
        //host
        $host = "localhost";

        //database name
        $dbname = "petstore";

        //user
        $user = "root";

        //password
        $pass = "";

        $charset = "utf8mb4";

        //Connection variable
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

        $conn = new PDO($dsn, $user, $pass);

        //PDO EXCEPTION
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }

    //Check if the connection is true or not
    if($conn == true)
    {

    }
    else{
        echo "connection error";
    }

?>