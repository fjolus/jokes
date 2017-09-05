<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=fjolus', 'fjolus', 'jonatan1');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8');
}

catch (PDOException $e)
{
    $error = "Unable to connect to the database" . $e->getMessage();
    include $SERVER['DOCUMENT_ROOT'] . '/nemendur/fjolus/jokes/error/error.php';
}
?>