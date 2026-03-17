<?php
    // echo "<pre>";
    //     print_r($_POST);
    // echo "</pre>";

$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=ifnotes";
$credentials = "user=postgres password=postgres";

// Establish a connection
$db_connection = pg_connect("$host $port $dbname $credentials");

if (!$db_connection) {
    die("Connection failed: " . pg_last_error());
}
echo "Connected to PostgreSQL successfully\n";

// Perform a query
$result = pg_query($db_connection, "INSERT INTO usuario(nome, email, senha) VALUES ('".$_POST['nome']."' , '".$_POST['email']."', md5('".$_POST['senha']."'));");

// Close the connection
pg_close($db_connection);



?>