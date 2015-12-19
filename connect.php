<?php

    
    session_start();
    echo "spade8451";
    //Connect to the database
    $host = "spade8451-cheapo_mail-2287078";   //See Step 3 about how to get host name
    $user = "spade8451";                     //Your Cloud 9 username
    $pass = "";                                 //Remember, there is NO password!
    $db = "cheapomail";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306

   $link = mysqli_connect("127.0.0.1", $user, $pass, $db);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else {

    echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
    $username="spade";
    $sql="SELECT * FROM User WHERE username = $username";
    echo $sql;
}

mysqli_close($link);

?>