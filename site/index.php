<html>
<head>
<title>Brave Frontier Server Status</title>
</head>
<body>
	<table>
		<tr>
			<td>Number</td>
			<td>Server</td>
			<td>Status</td>
		</tr>
		
<?php
	function is_up($url) {
		$header = get_headers($url);
		$up = strpos($header[0], "OK") !== FALSE;
		return $up;
	}
	
	$servers = [
		"http://1.api.bravefrontier.gumi.sg:80",
		"http://1.api.bravefrontier.gumi.sg:80"
	];
	
	$index = 1;
	foreach ($servers as $server ) {
		$up = is_up($server);
		$status = ($up == 1 ? "UP" : "DOWN");
		
		echo "<tr>";
			echo "<td>".$index."</td>";
			echo "<td>".$server."</td>";
			echo "<td>".$status."</td>";
		echo "</tr>";
		
		$index++;
	}
?>


</table>

</body>
</html>
