<?php
// echo "loginexec.php"; die();
session_start();
include('connection.php');
// Check if email and password are set
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Todo: server side validation

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify user exists and password is correct
    if($password == $user['password']){
        // if($user && password_verify($password, $user['password'])){ // Old syntax
        // Login success
        $_SESSION['user_id'] = $user['id']; // Store user id in session        
        header("Location: ../project/pages/dashboard.php"); // Redirect to a welcome page
    } else {
        // Login failed
        echo "Invalid email or password";
    }
} else {
    echo "Email and password are required";
}

// Close connection
$conn->close();
?>