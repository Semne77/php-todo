<?php
// web/index.php
require __DIR__ . '/db.php';

// fetch tasks
$stmt = $pdo->query('SELECT id, title FROM tasks ORDER BY id DESC');
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP Todo - Demo</title>
</head>
<body>
  <h1>Todo</h1>

  <form method="post" action="add.php">
    <input name="title" placeholder="New task" required>
    <button type="submit">Add</button>
  </form>

  <ul>
    <?php foreach ($tasks as $t): ?>
      <li>
        <?=htmlspecialchars($t['title'])?>
        <a href="delete.php?id=<?=urlencode($t['id'])?>" onclick="return confirm('Delete?')">[del]</a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
