<?php
$pdo = new PDO('sqlite:' . dirname(dirname(__FILE__)) . '/test.db', '', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
