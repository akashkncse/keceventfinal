<?php
$conn = mysqli_connect("localhost", "root", "", "kecevent");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and password are required!');</script>";
    } else {
        $sql = "SELECT * FROM signin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {

            echo "<script>
                alert('Login successful!');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                alert('Invalid username or password. Please create an account if you don\'t have one.');
                window.location.href = 'register.php';
            </script>";
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>