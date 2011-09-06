<?php

$conn = new mysqli('localhost', 'admin', 'admin', 'bbs');
$result = $conn->query("SELECT * FROM test1");

if (mysqli_affected_rows($conn) != 0)
{
?>
	<table border="1">
		<tr><th>Username </th><th>Password </th></tr>
<?php
	while ($row = mysqli_fetch_array($result))
	{
?>
		<tr>
		<td><?=$row['name'] ?></td>
		<td><?=$row['passwd'] ?></td>
		</tr>
<?php
	}
}
?> 