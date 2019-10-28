<?php
    include_once("./library.php");// To connect to the database
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
    
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Form the SQL query (an INSERT query)
    $sql = "INSERT INTO ALBUM (ALBUM_ID, ALBUM_TITLE, RELEASE_DATE)
    VALUES
    ('$_POST[ALBUM_ID]','$_POST[ALBUM_TITLE]','$_POST[RELEASE_DATE]')";
    
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
    
    echo "One Album Added";// Output to usermysqli_close($con);
?>