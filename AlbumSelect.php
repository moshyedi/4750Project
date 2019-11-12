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
    echo '<table style="width:100%"><tr><th>Album ID</th><th>Title</th><th>Release Date</th></tr>';
    while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
        echo "<td>" . $row['ALBUM_ID'] . "</td>";
        echo "<td>" . $row['ALBUM_TITLE'] . "</td>";
        echo "<td>" . $row['RELEASE_DATE'] . "</td>";
        echo "</tr>";
    }
    echo '</table>';
    mysqli_close($con);
 ?>
