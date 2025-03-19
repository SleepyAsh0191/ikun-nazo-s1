<?php
include($_SERVER['DOCUMENT_ROOT'] . "/template/config.php");

try {
    $pdo = new PDO(
        "mysql:host={$_CONFIG['mysql_address']};dbname={$_CONFIG['mysql_database']}",
        $_CONFIG['mysql_username'],
        $_CONFIG['mysql_password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("数据库连接失败：" . $e->getMessage());
  }