<?php

function connectToDatabase()
{
    try {
        return new PDO('mysql:host=localhost;dbname=contact', 'root', 'Sadal$6732');
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}

function selectAll($table)
{
    $pdo = connectToDatabase();
    $statement = $pdo->query("SELECT * FROM $table");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function create($table, $fields)
{
    $pdo = connectToDatabase();
    $query = "INSERT INTO $table (name, email, phone) VALUES (:name, :email, :phone)";
    $statement = $pdo->prepare($query);
    $statement->execute($fields);
}

function delete($table, $id)
{
    $pdo = connectToDatabase();
    $query = "DELETE FROM $table WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
}
