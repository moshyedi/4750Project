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
    $sql= "SELECT * FROM ARTIST ORDER BY NAME";
    $result = mysqli_query($con, $sql);
    // Print the data from the table row by row
    echo '<table style="width:100%"><tr><th>Artist ID</th><th>Name</th><th>Popularity</th><th># of Followers</th><th>Genre(s)</th></tr>';
    while($row = mysqli_fetch_array($result)) {
	      echo "<tr>";
        echo "<td>" . $row['ARTIST_ID'] . "</td>";
        echo "<td>" . $row['NAME'] . "</td>";
        echo "<td>" . $row['POPULARITY'] . "</td>";
        echo "<td>" . $row['NUM_FOLLOWERS'] . "</td>";
        echo "<td>" . $row['GENRES'] . "</td>";
        echo "</tr>";
    }
    echo '</table>';
    mysqli_close($con);
 ?>
