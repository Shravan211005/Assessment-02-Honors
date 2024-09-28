<?php
require 'functions.php';
$contacts = selectAll('contactlist');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>
    <link rel="stylesheet" href="pico.min.css">
</head>
<body>
    <h1>Contact List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= $contact['id']; ?></td>
            <td><?= $contact['name']; ?></td>
            <td><?= $contact['email']; ?></td>
            <td><?= $contact['phone']; ?></td>
            <td>
                <form action="delete.php" method="POST">
                    <input type="hidden" name="id" value="<?= $contact['id']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="add.php">Add New Contact</a>
</body>
</html>
