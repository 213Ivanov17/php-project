<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $conn->query("UPDATE todos SET title='$title' WHERE id=$id");
    header("Location: index.php");
} else {
    $id = $_GET['id'];
    $todo = $conn->query("SELECT * FROM todos WHERE id = $id")->fetch_assoc();
    ?>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $todo['id'] ?>">
        <input type="text" name="title" value="<?= $todo['title'] ?>">
        <button type="submit">Save</button>
    </form>
<?php } ?>