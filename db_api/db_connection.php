<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(DIR);
$dotenv->load();

//Connection Variables
$dbservername = $_ENV['DB_SERVERNAME'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];
$db_port = $_ENV['DB_PORT']; //3306

?>