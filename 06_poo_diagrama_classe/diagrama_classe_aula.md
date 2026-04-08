Esse é um **diagrama de classes UML**, usado para representar a estrutura de um sistema orientado a objetos.

<img width="450" height="332" alt="image" src="https://github.com/user-attachments/assets/35c4c95d-f9ca-464c-8a83-0a455ea75d9b" />

Vamos analisar parte por parte 👇

---

## 🧱 Classe **Usuario** (classe base)

A classe **Usuario** é a **superclasse** (ou classe pai).

### 🔹 Atributos (dados da classe)

Os atributos aparecem com o símbolo **-**, que significa **privado**:

* `email : String` → armazena o email do usuário
* `senha : String` → armazena a senha
* `nome : String` → armazena o nome

👉 **Privado (-)** = só pode ser acessado dentro da própria classe.

---

### 🔹 Métodos (comportamentos)

Os métodos aparecem com **+**, que significa **público**:

* `setEmail(email : String) : void`
  → define (altera) o email do usuário

* `getEmail() : String`
  → retorna o email do usuário

👉 **Público (+)** = pode ser acessado por outras classes.

---

## 👤 Classe **PessoaFisica**

Essa classe **herda** da classe `Usuario`.

A seta com triângulo aponta para a classe pai → isso representa **HERANÇA**.

### Possui:

* `cpf : String`

Além disso, **PessoaFisica herda automaticamente**:

✅ email
✅ senha
✅ nome
✅ métodos get/set

Ou seja, não precisa redefinir tudo.

---

## 🏢 Classe **PessoaJuridica**

Também herda da classe `Usuario`.

### Possui:

* `cnpj : String`

E igualmente herda:

✅ email
✅ senha
✅ nome
✅ métodos da classe Usuario

---

## 🧬 Relação entre as classes

```
           Usuario
           /     \
  PessoaFisica  PessoaJuridica
```

👉 `Usuario` é um conceito **genérico**
👉 `PessoaFisica` e `PessoaJuridica` são **especializações**

Isso é chamado de:

✅ **Generalização / Especialização**
✅ **Herança**

---

## 💡 Ideia principal do modelo

O sistema entende que:

* Todo **usuário** tem email, senha e nome.
* Um usuário pode ser:

  * uma pessoa física (CPF)
  * uma pessoa jurídica (CNPJ)

Assim evitamos repetir código — princípio de **reutilização** da orientação a objetos.

---



