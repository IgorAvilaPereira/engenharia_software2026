# 🎓 📘 Aula Completa: POO em PHP + Diagrama de Classes (UML)

---

# 🧠 1. Por que POO?

Problema (sem POO):

```php
<?php
$nome = "Produto";
$preco = 100;
$estoque = 10;
```

❌ Sem organização
❌ Difícil manter
❌ Não reutilizável

---

# 🧩 2. Classes e Objetos

```php
<?php
declare(strict_types=1);

class Produto {
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct(string $nome, float $preco, int $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender(int $quantidade): void {
        $this->estoque -= $quantidade;
    }
}
```

---

## 📐 UML

```text
+----------------------+
|       Produto        |
+----------------------+
| - nome: string       |
| - preco: float       |
| - estoque: int       |
+----------------------+
| + vender(qtd:int):void |
+----------------------+
```

---

# 🔒 3. Encapsulamento

👉 Protege os dados da classe

```php
class Conta {
    private float $saldo = 0;

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function getSaldo(): float {
        return $this->saldo;
    }
}
```

---

# 🧬 4. Herança

👉 Reutilizar código

---

## 💻 Exemplo – Animal

```php
class Animal {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function emitirSom(): void {
        echo "Som genérico\n";
    }
}
```

---

```php
class Cachorro extends Animal {
    public function emitirSom(): void {
        echo "Au au\n";
    }
}

class Gato extends Animal {
    public function emitirSom(): void {
        echo "Miau\n";
    }
}
```

---

## 📐 UML

```text
        +------------------+
        |     Animal       |
        +------------------+
        | # nome: string   |
        +------------------+
        | + emitirSom()    |
        +------------------+
               ▲
        ------------------
        |                |
+---------------+   +---------------+
|   Cachorro    |   |     Gato      |
+---------------+   +---------------+
```

---

# 🔁 5. Polimorfismo

👉 Mesmo método → comportamentos diferentes

---

```php
function fazerAnimalFalar(Animal $animal): void {
    $animal->emitirSom();
}
```

```php
$lista = [
    new Cachorro("Rex"),
    new Gato("Mimi")
];

foreach ($lista as $a) {
    fazerAnimalFalar($a);
}
```

---

# 💥 6. Override (Sobrescrita)

👉 Classe filha altera comportamento

```php
class Gato extends Animal {
    public function emitirSom(): void {
        echo "Miau\n";
    }
}
```

---

# 🧠 7. `parent` (equivalente ao super)

👉 Reutiliza comportamento da classe pai

---

## 💻 Exemplo – construtor

```php
class Pessoa {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }
}
```

```php
class Aluno extends Pessoa {
    private string $matricula;

    public function __construct(string $nome, string $matricula) {
        parent::__construct($nome);
        $this->matricula = $matricula;
    }
}
```

---

## 💻 Exemplo – método

```php
class Funcionario {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function apresentar(): void {
        echo "Funcionário: {$this->nome}\n";
    }
}
```

```php
class Gerente extends Funcionario {
    public function apresentar(): void {
        parent::apresentar();
        echo "Cargo: Gerente\n";
    }
}
```

---

# 🔁 8. Polimorfismo + parent juntos

```php
class Cachorro extends Animal {
    public function emitirSom(): void {
        parent::emitirSom();
        echo "Au au\n";
    }
}
```

---

# 📐 UML (completo)

```text
        +------------------+
        |     Animal       |
        +------------------+
        | # nome: string   |
        +------------------+
        | + emitirSom()    |
        +------------------+
               ▲
        ------------------
        |                |
+---------------+   +---------------+
|   Cachorro    |   |     Gato      |
+---------------+   +---------------+
| + emitirSom() |   | + emitirSom() |
+---------------+   +---------------+
```

---

# 🧩 9. Outro exemplo completo (Funcionários)

```php
class Funcionario {
    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, float $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus(): float {
        return $this->salario * 0.1;
    }
}
```

```php
class Gerente extends Funcionario {
    public function calcularBonus(): float {
        return $this->salario * 0.2;
    }
}

class Desenvolvedor extends Funcionario {
    public function calcularBonus(): float {
        return $this->salario * 0.15;
    }
}
```

---

## 📐 UML

```text
        +----------------------+
        |     Funcionario      |
        +----------------------+
        | # nome: string       |
        | # salario: float     |
        +----------------------+
        | + calcularBonus():float |
        +----------------------+
                ▲
        -------------------------
        |                       |
+----------------+     +-------------------+
|    Gerente     |     |  Desenvolvedor    |
+----------------+     +-------------------+
```

---

# 📐 10. Relacionamentos UML

---

## 🔹 Associação

```php
class Pedido {
    private Cliente $cliente;
}
```

👉 UML:

```
Pedido -------- Cliente
```

---

## 🔹 Agregação

```php
class Pedido {
    private array $itens;
}
```

👉 UML:

```
Pedido ◇-------- Item
```

---

## 🔹 Composição

```php
class Casa {
    private Porta $porta;
}
```

👉 UML:

```
Casa ◆-------- Porta
```

---

# 🔒 11. Modificadores de acesso

| Tipo      | Significado     |
| --------- | --------------- |
| private   | só na classe    |
| protected | classe + filhas |
| public    | qualquer lugar  |

---

# ⚠️ 12. Erros comuns

❌ Usar `if` em vez de polimorfismo
❌ Não usar `parent` quando precisa
❌ Atributos mal encapsulados
❌ Confundir herança com associação

---

# 🧪 13. Exercício (pronto pra aula)

👉 Criar:

* Classe `Veiculo`
* `Carro` e `Moto`

---

## 💡 Código esperado

```php
class Veiculo {
    public function mover(): void {
        echo "Veículo em movimento\n";
    }
}

class Carro extends Veiculo {
    public function mover(): void {
        parent::mover();
        echo "Carro na estrada\n";
    }
}

class Moto extends Veiculo {
    public function mover(): void {
        echo "Moto rápida\n";
    }
}
```

---

## 📐 UML

```text
Veiculo
  ▲
  |
---------
|       |
Carro   Moto
```

---

# 🎯 14. Fechamento forte da aula

* **Classe** → estrutura
* **Encapsulamento** → proteção
* **Herança** → reutilização
* **Polimorfismo** → flexibilidade
* **Override** → especialização
* **parent** → reaproveitamento
* **UML** → representação visual

---

# 💡 Frase final

> “UML ajuda a pensar.
> POO ajuda a implementar.”

---

