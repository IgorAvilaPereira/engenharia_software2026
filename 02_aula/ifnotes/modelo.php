<?php

class ConexaoPostgreSQL {
    private $db_connection;

    public function abreConexao() {
        $host = "host=localhost";
        $port = "port=5432";
        $dbname = "dbname=ifnotes";
        $credentials = "user=postgres password=postgres";
        $this->db_connection = pg_connect("$host $port $dbname $credentials");
        if (!$this->db_connection) {
            die("Connection failed: " . pg_last_error());
        }
        return $this->db_connection;
    }

    public function fechaConexao(){
        pg_close($this->db_connection);
    }

}

class Usuario {
    private int $id;

    private string $email;
    private string $senha;
    private string $nome;

    public function __construct(string $nome = "", string $email = "", string $senha = ""){
        $this->nome = $nome;
        $this->email =  $email;
        $this->senha = $senha; 
    }

    public function getId():int {
        return $this->id;
    }

    public function getNome():string {
        return $this->nome;
    }

    public function getSenha(): string {
        return $this->senha;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

     public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function cadastrar(): bool {
        try {           
            $conexao = new ConexaoPostgreSQL();
            $db_connection = $conexao->abreConexao();
            $result = pg_query($db_connection, "INSERT INTO usuario(nome, email, senha) VALUES ('".$this->nome."' , '".$this->email."', md5('".$this->senha."'));");
            $conexao->fechaConexao();
        } catch (\Throwable $th) {
            return false;
        }        
        return true;
    }    


    public function excluir(){
        $conexao = new ConexaoPostgreSQL();
        $db_connection = $conexao->abreConexao();
        $result = pg_query($db_connection, "DELETE FROM usuario where id = ".$this->id.";");
        $conexao->fechaConexao();
    }

    public static function listar() {
        $vetUsuario = array();
        $conexao = new ConexaoPostgreSQL();
        $db_connection = $conexao->abreConexao();
        $result = pg_query($db_connection, "SELECT * FROM usuario;");
        while ($registro = pg_fetch_array($result)) {
            $usuario = new Usuario();
            $usuario->setId($registro['id']);
            $usuario->setNome($registro['nome']);
            $usuario->setEmail($registro['email']);
            $usuario->setSenha($registro['senha']);
            $vetUsuario[] = $usuario;
        }
        $conexao->fechaConexao();
        return $vetUsuario;
    }

    public function toJson() {
        return '{"nome":'.$this->nome.'}';
    }
}

// $igor = new Usuario("Telecken", "teleck2en@gmail.com", "123");
// echo $igor->getNome(); # 
// $igor->cadastrar();



?>

