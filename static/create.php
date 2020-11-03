<?php
require_once dirname(__FILE__) . '/prepare.php';

$pdo->exec('CREATE TABLE IF NOT EXISTS todos(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title VARCHAR(10),
  hours INTEGER,
  done BOOLEAN DEFAULT FALSE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
)');

$stmt = $pdo->prepare('INSERT INTO todos(title, hours) VALUES (?, ?)');
foreach ([['宿題', '30'], ['歯磨き', '5']] as $params) {
    $stmt->execute($params);
}

echo 'ok';