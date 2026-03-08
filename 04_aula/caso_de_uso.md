# Diagrama de Caso de Uso

O **Diagrama de Caso de Uso** é um tipo de diagrama da **UML (Unified Modeling Language)** usado na **Engenharia de Software** para **representar as funcionalidades de um sistema e as 
interações com seus usuários (atores)**.

Ele mostra **o que o sistema faz**, do ponto de vista do usuário, **sem mostrar detalhes de implementação**.

---

# Elementos de um Diagrama de Caso de Uso

## 1. Ator

Representa **quem interage com o sistema**.

Pode ser:

* pessoa
* outro sistema
* organização

Representação: **boneco**

Exemplos:

* Cliente
* Administrador
* Sistema de pagamento

---

## 2. Caso de uso

Representa **uma funcionalidade do sistema**.

É desenhado como **uma elipse**.

Exemplos:

* Realizar login
* Fazer pedido
* Consultar notas
* Gerar relatório

---

## 3. Sistema

É o **limite do sistema**, normalmente representado por **um retângulo** que contém os casos de uso.

---

## 4. Relacionamentos

### Associação

Ligação entre **ator e caso de uso**.

Exemplo:
Cliente — Fazer pedido

---

### Include

Indica que **um caso de uso sempre utiliza outro**.

Exemplo:

```
Realizar compra
      |
   <<include>>
      |
Autenticar usuário
```

---

### Extend

Indica **funcionalidade opcional ou condicional**.

Exemplo:

```
Realizar compra
      |
   <<extend>>
      |
Aplicar cupom
```

---

# Exemplo simples (Sistema de Biblioteca)

```
        +---------------------------+
        |   Sistema de Biblioteca   |
        |                           |
Aluno -------- (Consultar livro)    |
Aluno -------- (Realizar empréstimo)|
Bibliotecário - (Cadastrar livro)   |
Bibliotecário - (Gerar relatório)   |
        |                           |
        +---------------------------+
```

---

# Exemplo mais estruturado

Atores:

* Cliente
* Administrador

Casos de uso:

* Fazer login
* Comprar produto
* Consultar pedido
* Gerar relatório

```
Cliente -------- (Fazer login)
Cliente -------- (Comprar produto)
Cliente -------- (Consultar pedido)

Administrador -- (Gerar relatório)
Administrador -- (Cadastrar produto)
```

---

# Para que serve o diagrama de caso de uso

Ele é usado para:

✔ entender **funcionalidades do sistema**
✔ identificar **atores envolvidos**
✔ ajudar na **definição de requisitos funcionais**
✔ facilitar a comunicação entre **clientes e desenvolvedores**

---

# Quando ele é usado no processo

Normalmente aparece na fase de **análise de requisitos** dentro da **Especificação de Requisitos de Software (ERS)**.

Fluxo típico:

1. Elicitação de requisitos
2. Análise dos requisitos
3. **Diagramas de caso de uso**
4. Especificação dos requisitos
5. Projeto do sistema

---

✅ **Resumo**

O **Diagrama de Caso de Uso** mostra:

* **quem usa o sistema (atores)**
* **quais funcionalidades existem (casos de uso)**
* **como ocorre a interação com o sistema**


