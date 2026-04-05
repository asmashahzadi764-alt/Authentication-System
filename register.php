<?php
include("connection.php");

$msg = "";

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (fullname, email, password)
            VALUES ('$fullname', '$email', SHA2('$password', 256))";

    if(mysqli_query($conn, $sql)){
        $msg = "<p class='message-success'>Registration Successful! ✅</p>";
    }
    else{
        $msg = "<p class='message-error'>Error: Email already exists ❌</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Create Account</h2>

    <?php echo $msg; ?>

    <form method="POST">
        <input type="text" name="fullname" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="register">Register</button>
    </form>

    <a href="index.php">Already have an account? Login</a>
</div>

</body>
</html>