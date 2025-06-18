<?php
include 'db.php';
$title = $_POST['title'];
$conn->query("INSERT INTO todos (title) VALUES ('$title')");
header("Location: index.php");
?>