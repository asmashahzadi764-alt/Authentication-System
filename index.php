<?php
session_start();
include("connection.php");

$msg = "";

if(isset($_POST['login'])){

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("CALL login_user(?, ?)");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fullname'] = $user['fullname'];

        $msg = "<p class='message-success'>Login Successful! 🎉 Welcome ".$user['fullname']."</p>";
    }
    else{
        $msg = "<p class='message-error'>Invalid Email or Password ❌</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>User Login</h2>

    <?php echo $msg; ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <a href="register.php">Don't have an account? Register</a>
</div>

</body>
</html>