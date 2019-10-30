<?php
    // Connect to the database
    require_once("./library.php"); 
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
	return null;
    }

    // Form the SQL query (an INSERT query)
    $sql= "SELECT * FROM ALBUM ORDER BY ALBUM_TITLE";
    $result = mysqli_query($con, $sql);

    // Print the data from the table row by row
    while($row = mysqli_fetch_array($result)) {
        echo $row['ALBUM_ID'];
        echo " " . $row['ALBUM_TITLE'];
        echo " " . $row['RELEASE_DATE'];
        echo "<br>";
    }
    mysqli_close($con);
 ?>
