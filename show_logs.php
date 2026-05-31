<?php
include("connection.php");

$result = mysqli_query($conn,"SELECT * FROM user_log");
?>

<!DOCTYPE html>
<html>
<head>
<title>Trigger Logs</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Trigger Logs</h2>

<table border="1" width="100%">
<tr>
<th>Log ID</th>
<th>Message</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['log_id']; ?></td>
<td><?php echo $row['message']; ?></td>
</tr>
<?php
}
?>

</table>

</div>

</body>
</html>
