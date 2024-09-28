<?php
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone']
    ];
    create('contactlist', $fields);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <link rel="stylesheet" href="pico.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><strong>Contact Management System</strong></li>
                <li><a href="index.php">Contact List</a></li>
                <li><a href="add.php">Add Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Add New Contact</h1>
        <form action="add.php" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" required>
            </div>
            <div>
                <button type="submit">Add Contact</button>
            </div>
        </form>
        <a href="index.php">Back to Contact List</a>
    </main>
</body>
</html>
