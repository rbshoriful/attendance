<?php
    // Development connection
    // $host = 'localhost';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';
   
    // Remote Database Connection
    $host = 'remotemysql.com';
    $db = 'BLQO9JaxxS';
    $user = 'BLQO9JaxxS';
    $pass = 'CwRRxusvoN';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        // echo 'Hello Database';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        // echo '<h1 class="text-danger">No Database Found</h1>';
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
    // require crud down line add function
    $user->insertUser("admin","password");
    $user->insertUser("admin2","password");
?>