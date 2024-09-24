<?php
    session_start()
    $dsn = 'mysql:host=;dbname=contact_manager';
    $username = 'root';
    $password = '123456';

    try {
        $db = new PDO($dsn, $username, $password);
    }
    catch (PDOException $e)
    {
        $_SESSION["database_error"] = $e->getMessage();
        $url = "database_error.php";
        header("Location: " . $url);
        exit();
    }

?>