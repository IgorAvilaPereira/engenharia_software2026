# 1. Arquitetura Cliente-Servidor

A **arquitetura cliente-servidor** é um modelo muito utilizado no desenvolvimento de aplicações web. Nesse modelo, o sistema é dividido em duas partes principais: **cliente** e **servidor**, que se comunicam por meio de uma rede (geralmente a internet) usando protocolos como **HTTP/HTTPS**.


Na arquitetura cliente-servidor, cada lado possui responsabilidades bem definidas.

### Cliente (Client)

O **cliente** é o lado que interage diretamente com o usuário. Normalmente ele é executado dentro de um navegador (browser).

As tecnologias **vanilla** mais comuns no front-end são:

* **HTML** – estrutura da página
* **CSS** – estilização e layout
* **JavaScript** – comportamento e interatividade

Esse conjunto roda **diretamente no navegador**, sem necessidade de compilação no servidor.

Funções do cliente:

* Renderizar a interface do usuário
* Capturar ações do usuário
* Enviar requisições ao servidor
* Receber e exibir respostas

Exemplo de fluxo:

1. Usuário clica em um botão
2. JavaScript envia uma requisição HTTP
3. O servidor processa
4. O servidor retorna dados (geralmente **JSON**)
5. O navegador atualiza a interface

---

### Servidor (Backend)

O **servidor** é responsável pelo **processamento das regras de negócio** da aplicação.

Geralmente ele roda aplicações em **linguagens orientadas a objetos**, como:

* Java
* C#
* Python
* PHP
* Ruby
* Kotlin

Funções do backend:

* Processar regras de negócio
* Autenticação de usuários
* Comunicação com banco de dados
* Processamento de dados
* Segurança

Fluxo típico:

```
Cliente → HTTP Request → Servidor → Banco de Dados
Cliente ← HTTP Response ← Servidor
```

---

# 2. Arquitetura em 3 Camadas (Three-Tier Architecture)

A **arquitetura de três camadas** é uma evolução da arquitetura cliente-servidor que separa melhor as responsabilidades do sistema.

Ela divide o sistema em três partes:

### 1️⃣ Camada de Apresentação (Presentation Layer)

Responsável pela interface com o usuário.

Tecnologias típicas:

* HTML
* CSS
* JavaScript
* Navegadores

Função:

* Mostrar informações
* Capturar ações do usuário

---

### 2️⃣ Camada de Lógica de Negócio (Business Layer)

Aqui ficam as **regras da aplicação**.

Exemplos de regras:

* validar login
* calcular valores
* verificar permissões

Tecnologias comuns:

* Java (Spring)
* C# (.NET)
* Python (Django)
* Node.js

---

### 3️⃣ Camada de Dados (Data Layer)

Responsável pela persistência dos dados.

Normalmente utiliza **bancos de dados relacionais**, como:

* MySQL
* PostgreSQL
* Oracle
* SQL Server

Função:

* armazenar dados
* recuperar dados
* garantir integridade

---

### Estrutura geral

```
Usuário
   ↓
Apresentação (Frontend)
   ↓
Lógica de Negócio (Backend)
   ↓
Camada de Dados (Banco)
```

Essa separação facilita:

* manutenção
* escalabilidade
* reutilização de código

---

# 3. Arquitetura MVC

O **MVC (Model-View-Controller)** é um **padrão arquitetural de software**, usado principalmente dentro do backend ou de frameworks web.

Ele divide a aplicação em três componentes:

### Model

Representa:

* dados
* regras de negócio
* entidades do sistema

Exemplo:

```
Usuario
Produto
Pedido
```

Ele também pode interagir com o banco de dados.

---

### View

Responsável pela **apresentação dos dados ao usuário**.

Exemplos:

* páginas HTML
* templates
* interfaces gráficas

---

### Controller

O **controller** atua como intermediário.

Funções:

* recebe requisições do usuário
* chama o Model
* escolhe qual View será exibida

Fluxo MVC:

```
Usuário → Controller → Model → Banco
             ↓
            View
             ↓
          Usuário
```

---

# 4. Diferença entre Arquitetura 3 Camadas e MVC

Embora pareçam semelhantes, elas têm **objetivos diferentes**.

| Característica | Arquitetura 3 Camadas        | MVC                            |
| -------------- | ---------------------------- | ------------------------------ |
| Tipo           | Arquitetura de sistema       | Padrão de design               |
| Escopo         | Estrutura geral da aplicação | Organização interna do código  |
| Foco           | Separação física/lógica      | Separação de responsabilidades |
| Camadas        | Apresentação, Negócio, Dados | Model, View, Controller        |

### Relação entre elas

O MVC pode existir **dentro da camada de apresentação ou backend** de uma arquitetura 3 camadas.

Exemplo comum:

```
Camada Apresentação → View
Camada Negócio → Controller + Model
Camada Dados → Banco de Dados
```

Ou seja, **elas podem coexistir**.

---

# 5. Problema do Mapeamento Objeto-Relacional (ORM)

Um grande desafio no desenvolvimento de aplicações é o **mapeamento entre objetos e bancos relacionais**.

Isso é conhecido como:

**Object-Relational Impedance Mismatch**

### Por que esse problema existe?

Aplicações orientadas a objetos trabalham com:

* classes
* objetos
* herança
* encapsulamento

Exemplo em código:

```
class Usuario {
   id
   nome
   email
}
```

Já bancos relacionais trabalham com:

* tabelas
* linhas
* colunas
* chaves primárias e estrangeiras

Exemplo:

```
Tabela: usuarios
id | nome | email
```

Esses dois modelos **não são naturalmente compatíveis**.

Problemas comuns:

* herança não existe em SQL
* objetos possuem relacionamentos complexos
* bancos usam tabelas normalizadas

---

### Exemplo de dificuldade

Em OO:

```
Pedido
  └── Lista de Produtos
```

No banco relacional:

```
pedido
produto
pedido_produto (tabela de relacionamento)
```

Ou seja, é necessário **transformar objetos em registros de tabelas e vice-versa**.

---

### Solução: ORM (Object Relational Mapping)

Para resolver isso surgiram ferramentas chamadas **ORM**.

Elas fazem o mapeamento automático entre:

```
Objeto ↔ Tabela
Atributo ↔ Coluna
Objeto ↔ Registro
```

Exemplos populares:

* Hibernate (Java)
* Entity Framework (.NET)
* Sequelize (Node)
* Django ORM (Python)

Exemplo:

```java
Usuario usuario = repository.findById(1);
```

O ORM transforma isso internamente em:

```sql
SELECT * FROM usuarios WHERE id = 1;
```

---

# Conclusão

A arquitetura cliente-servidor é a base das aplicações web modernas, separando **interface e processamento**.
A arquitetura **3 camadas** organiza melhor o sistema separando **apresentação, lógica e dados**, enquanto o **MVC** organiza o código internamente em **Model, View e Controller**.

Além disso, aplicações orientadas a objetos que utilizam bancos de dados relacionais enfrentam o desafio do **mapeamento objeto-relacional**, frequentemente resolvido por meio de ferramentas **ORM**, que automatizam a conversão entre objetos e tabelas.

---

# 1. Onde entra a API REST na arquitetura

Uma **API REST (Representational State Transfer)** é uma **interface de comunicação entre sistemas**, geralmente utilizada entre o **front-end (cliente)** e o **backend (servidor)**.

Ela funciona como uma **camada de acesso aos serviços do servidor**.

### Fluxo típico

```
Browser (Frontend)
      ↓ HTTP
API REST (Backend)
      ↓
Lógica de Negócio
      ↓
Banco de Dados
```

Ou seja, a API REST normalmente fica **dentro da camada de lógica de negócio** da arquitetura em 3 camadas.

---

### Comunicação via HTTP

A API REST utiliza os métodos do protocolo HTTP para manipular recursos:

| Método | Função          |
| ------ | --------------- |
| GET    | Buscar dados    |
| POST   | Criar dados     |
| PUT    | Atualizar dados |
| DELETE | Remover dados   |

Exemplo:

```
GET /usuarios
POST /usuarios
GET /usuarios/10
DELETE /usuarios/10
```

Esses endpoints representam **recursos do sistema**.

---

### Formato de dados

Normalmente a comunicação ocorre usando **JSON**:

Exemplo de resposta da API:

```json
{
  "id": 10,
  "nome": "Maria",
  "email": "maria@email.com"
}
```

O **JavaScript no navegador** consome essa API usando tecnologias como:

* `fetch()`
* `XMLHttpRequest`

Exemplo:

```javascript
fetch("/api/usuarios")
  .then(response => response.json())
  .then(data => console.log(data))
```

---

# 2. API REST dentro do MVC

Quando usamos MVC em aplicações web, a API REST normalmente é implementada nos **controllers**.

Fluxo:

```
Cliente → Controller (API REST) → Model → Banco
```

Exemplo de requisição:

```
GET /produtos
```

Fluxo interno:

```
Request → Controller → Model → Banco → Controller → Response JSON
```

Ou seja:

* **Controller** expõe os endpoints REST
* **Model** representa os dados
* **View** pode ser HTML ou até JSON em APIs

Em muitas aplicações modernas chamadas **REST APIs**, a View é basicamente **JSON**, e não páginas HTML.

---

# 3. Monólito vs Microserviços

Tradicionalmente, muitas aplicações são construídas como **monólitos**.

### Arquitetura Monolítica

Todo o sistema roda como **uma única aplicação**.

```
Frontend
   ↓
Backend (Aplicação única)
   ├── Usuários
   ├── Produtos
   ├── Pedidos
   └── Pagamentos
   ↓
Banco de dados
```

Problemas:

* difícil escalar
* difícil manter sistemas muito grandes
* deploy de tudo ao mesmo tempo
* acoplamento alto

---

# 4. Arquitetura de Microserviços

A **arquitetura de microserviços** divide o sistema em **vários serviços pequenos e independentes**.

Cada serviço:

* possui responsabilidade específica
* pode ter seu próprio banco
* pode ser implementado em linguagens diferentes
* comunica-se com outros serviços via **API (geralmente REST)**.

Exemplo:

```
Frontend
   ↓
API Gateway
   ↓
---------------------------------
| Serviço Usuário               |
| Serviço Produtos              |
| Serviço Pedidos               |
| Serviço Pagamentos            |
---------------------------------
```

Cada serviço possui:

```
Serviço Produtos
   ├── Controller
   ├── Lógica de negócio
   └── Banco de dados
```

---

# 5. Comunicação entre Microserviços

Os microserviços normalmente se comunicam usando:

### APIs REST

Exemplo:

```
Pedido Service → chama → Produto Service
GET /produtos/20
```

ou usando:

### Mensageria

Exemplos:

* Kafka
* RabbitMQ
* ActiveMQ

Isso permite comunicação **assíncrona**.

---

# 6. Relação entre todas as arquiteturas

Podemos organizar assim:

```
Frontend (Browser)
   ↓
API REST
   ↓
Backend
   ├── MVC
   ├── Lógica de negócio
   └── ORM
        ↓
      Banco
```

Dentro de um sistema maior:

```
Frontend
   ↓
API Gateway
   ↓
Microserviços
   ├── Serviço A
   ├── Serviço B
   └── Serviço C
        ↓
      Bancos
```

---

# 7. Resumo das relações

| Conceito               | Papel                                        |
| ---------------------- | -------------------------------------------- |
| Cliente-Servidor       | Modelo básico de comunicação                 |
| Frontend (HTML/CSS/JS) | Interface no navegador                       |
| Backend                | Processamento da aplicação                   |
| Arquitetura 3 Camadas  | Organização lógica do sistema                |
| MVC                    | Organização interna do código                |
| API REST               | Interface de comunicação entre sistemas      |
| ORM                    | Mapeamento entre objetos e banco relacional  |
| Microserviços          | Divisão do sistema em serviços independentes |

---

💡 **Resumo conceitual importante:**

* **Cliente-servidor** define *quem conversa com quem*.
* **3 camadas** define *como o sistema é dividido*.
* **MVC** define *como organizar o código*.
* **API REST** define *como os sistemas se comunicam*.
* **Microserviços** define *como dividir sistemas grandes em partes menores*.

---

