<?php      
    $host = "localhost";  
    $user = "abc";  
    $password = 'abc123';  
    $db_name = "blueform data";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  