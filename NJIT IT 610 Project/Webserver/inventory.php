<?php
	$dbhost = 'Database:3036';
	$dbuser = 'dev';
	$dbpass = 'pacman';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass)

	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}
	
	$query = sprintf("select * from table");
 
    $result = mysql_query($query, $conn);

	echo "<table> <tr><td>Device Name</td><td>Purpose</td><td>Wireless MAC</td><td>Wired MAC</td><td>IP Address</td><td>Description</td><td>Location</td></tr>";

	while ($row = mysql_fetch_array($results))
		{
		echo "<tr><td>".($row[deviceName])."</td><td>".($row[purpose])."</td><td>".($row[WirelessMAC])."</td><td>".($row[WiredMAC])."</td><td>".($row[IPAddress])."</td><td>".($row[description])."</td><td>".($row[Location])."</td></tr>";
		}

	echo "</table>";

	mysql_close($conn);
?>


