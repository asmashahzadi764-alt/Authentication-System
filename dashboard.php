<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Welcome <?php echo $_SESSION['fullname']; ?></h2>

    <a href="show_users.php">
        <button>Show All Users (Procedure)</button>
    </a>

    <a href="show_logs.php">
        <button>View Trigger Logs</button>
    </a>

</div>

</body>
</html>
