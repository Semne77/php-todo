<?php
// web/add.php
require __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    if ($title !== '') {
        $stmt = $pdo->prepare('INSERT INTO tasks (title) VALUES (:title)');
        $stmt->execute([':title' => $title]);
    }
}
header('Location: /');
exit;
