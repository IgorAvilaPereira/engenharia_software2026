```php
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
```php

Esse código PHP implementa um **modelo orientado a objetos** para manipular usuários em um banco **PostgreSQL**.

Vou explicar por partes 👇

---

# 🧱 1. Classe `ConexaoPostgreSQL`

Essa classe é responsável **somente pela conexão com o banco de dados**.

👉 Princípio usado: **separação de responsabilidades**

---

## 🔹 Atributo

```php
private $db_connection;
```

Guarda a conexão ativa com o banco.

`private` → só pode ser usado dentro da classe.

---

## 🔹 Método `abreConexao()`

```php
public function abreConexao()
```

### O que faz:

1. Define dados da conexão:

```php
$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=ifnotes";
$credentials = "user=postgres password=postgres";
```

2. Abre conexão com PostgreSQL:

```php
pg_connect(...)
```

3. Verifica erro:

```php
if (!$this->db_connection)
    die("Connection failed...");
```

4. Retorna a conexão aberta.

✅ Resultado: permite que outras classes usem o banco.

---

## 🔹 Método `fechaConexao()`

```php
pg_close($this->db_connection);
```

Fecha a conexão com o banco.

---

# 👤 2. Classe `Usuario`

Representa um **usuário do sistema**.

👉 Equivale à classe `Usuario` do diagrama UML que você mostrou antes.

---

## 🔹 Atributos

```php
private int $id;
private string $email;
private string $senha;
private string $nome;
```

Cada objeto Usuario possui:

* id → identificador no banco
* nome
* email
* senha

---

## 🔹 Construtor

```php
public function __construct(string $nome="", string $email="", string $senha="")
```

Executa automaticamente quando cria o objeto:

```php
$usuario = new Usuario("Igor","email","123");
```

Ele inicializa os dados do usuário.

---

## 🔹 Getters e Setters

Exemplo:

```php
getNome()
setNome()
```

Servem para:

✅ acessar dados privados
✅ modificar dados com segurança

Isso se chama **encapsulamento**.

---

# 💾 3. Método `cadastrar()`

Responsável por **salvar o usuário no banco**.

---

### Passo a passo:

### 1️⃣ Cria conexão

```php
$conexao = new ConexaoPostgreSQL();
$db_connection = $conexao->abreConexao();
```

---

### 2️⃣ Executa INSERT

```php
INSERT INTO usuario(nome, email, senha)
```

Salva:

* nome
* email
* senha

A senha é criptografada:

```php
md5('senha')
```

⚠️ Observação importante:

👉 **MD5 não é seguro hoje**
O ideal seria:

```php
password_hash()
```

---

### 3️⃣ Fecha conexão

```php
$conexao->fechaConexao();
```

---

### 4️⃣ Tratamento de erro

```php
try { ... } catch (...)
```

Se der erro → retorna `false`.

---

✅ Retorno final:

```php
true  -> sucesso
false -> erro
```

---

# 🗑️ 4. Método `excluir()`

Remove o usuário do banco.

```php
DELETE FROM usuario WHERE id = ...
```

Ele usa o **id do objeto atual**.

Exemplo:

```php
$usuario->setId(3);
$usuario->excluir();
```

---

# 📋 5. Método `listar()` (STATIC)

```php
public static function listar()
```

👉 `static` significa:

✅ não precisa criar objeto antes.

Pode chamar assim:

```php
Usuario::listar();
```

---

## O que ele faz?

1. Busca todos usuários:

```sql
SELECT * FROM usuario;
```

2. Para cada registro:

* cria um objeto Usuario
* preenche dados
* adiciona em um vetor

```php
$vetUsuario[]
```

3. Retorna um **array de objetos Usuario**.

---

✅ Resultado:

```php
$lista = Usuario::listar();
```

Agora `$lista` contém vários objetos Usuario.

---

# 🔄 6. Método `toJson()`

```php
return '{"nome":'.$this->nome.'}';
```

Transforma o usuário em JSON.

⚠️ Problema:

Falta aspas no valor → deveria ser:

```php
return '{"nome":"'.$this->nome.'"}';
```

Ou melhor:

```php
json_encode()
```

---

# 🧠 Conceitos de POO usados

✅ Classe
✅ Objeto
✅ Encapsulamento
✅ Construtor
✅ Métodos
✅ Atributos privados
✅ Método estático
✅ Separação de responsabilidade
✅ Persistência em banco

---

# 🔥 Fluxo geral do sistema

```text
Usuario → usa → ConexaoPostgreSQL → acessa → Banco PostgreSQL
```


