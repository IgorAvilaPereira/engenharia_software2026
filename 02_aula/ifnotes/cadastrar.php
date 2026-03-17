<?php
    // echo "<pre>";
    //     print_r($_POST);
    // echo "</pre>";

$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=ifnotes";
$credentials = "user=postgres password=postgres";

// Realizando a conexao
$db_connection = pg_connect("$host $port $dbname $credentials");

// se der algum erro
if (!$db_connection) {
    die("Connection failed: " . pg_last_error());
}

// se tudo ok
echo "Connected to PostgreSQL successfully\n";

// executando o insert
$result = pg_query($db_connection, "INSERT INTO usuario(nome, email, senha) VALUES ('".$_POST['nome']."' , '".$_POST['email']."', md5('".$_POST['senha']."'));");

// fechando a conexao
pg_close($db_connection);

?>