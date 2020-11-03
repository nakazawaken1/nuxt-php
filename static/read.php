<?php
require_once dirname(__FILE__) . '/prepare.php';

$stmt = $pdo->prepare('SELECT * FROM todos');
$stmt->execute();
while ($row = $stmt->fetch()) {
    var_export($row);
}
