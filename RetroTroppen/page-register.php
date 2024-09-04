<!-- register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="submit">Register</button>
    </form>
</body>
</html>

 
<?php
// Code for checking the user and hashing the password

if (isset($_POST['submit'])) {
    // Grabbing the form data
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password for security

    // Creating an array to store the user data
    $user_data = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
    ];

    // Where the data will be stored
    $file_path = 'users.json';

    // Reading the data in the file
    if (file_exists($file_path)) {
        $json_data = file_get_contents($file_path);
        $users = json_decode($json_data, true);
    } else {
        // Initialize an empty array if the file doesn't exist
        $users = [];
    }

    // Check if the username or email already exists
    foreach ($users as $user) {
        if ($user['username'] === $username || $user['email'] === $email) {
            echo "Username or email already taken. Please choose a different one.";
            exit;
        }
    }

    // Append the new user data to the existing array
    $users[] = $user_data;

    // Save the updated array back to the file
    file_put_contents($file_path, json_encode($users, JSON_PRETTY_PRINT));

    // Success message
    echo "Registration successful!";
}
?>
