<?php
include("connection.php");

$result = mysqli_query($conn,"CALL ShowUsers()");
?>

<!DOCTYPE html>
<html>
<head>
<title>All Users</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Users List</h2>

<table border="1" width="100%">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>
<?php
}
?>

</table>

</div>

</body>
</html>
