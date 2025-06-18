<?php include 'db.php';

$result = $conn->query("SELECT * FROM todos ORDER BY id DESC");
?>

<h2>TODO List</h2>
<form method="POST" action="add.php">
    <input type="text" name="title" placeholder="Enter task" required>
    <button type="submit">Add</button>
</form>

<ul>
<?php while($row = $result->fetch_assoc()): ?>
    <li>
        <?= $row['is_completed'] ? "<s>{$row['title']}</s>" : $row['title'] ?>
        <a href="complete.php?id=<?= $row['id'] ?>">[Toggle]</a>
        <a href="edit.php?id=<?= $row['id'] ?>">[Edit]</a>
        <a href="delete.php?id=<?= $row['id'] ?>">[Delete]</a>
    </li>
<?php endwhile; ?>
</ul>