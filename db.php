<?php
// Data
$dbs = "localhost";
$dbn = "test";
$dbu = "root";
$dbpass = "root";
$dbp = "3306";
//Data Source Name
$dsn = "mysql:host=$dbs;port=$dbp;dbname=$dbn";
//Connect
try {
    $db = new PDO($dsn, $dbu, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}
