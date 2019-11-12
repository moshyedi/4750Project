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
    $sql= "SELECT * FROM USER ORDER BY USERNAME";
    $result = mysqli_query($con, $sql);
    // Print the data from the table row by row
    echo '<table style="width:100%"><tr><th>Username</th><th>Number of Followers</th><th>Number Following</th></tr>';
    while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
        echo "<td>" . $row['USERNAME'] . "</td>";
        echo "<td>" . $row['NUM_FOLLOWERS'] . "</td>";
        echo "<td>" . $row['NUM_FOLLOWING'] . "</td>";
        echo "</tr>";
    }
    echo '</table>';
    mysqli_close($con);
 ?>
