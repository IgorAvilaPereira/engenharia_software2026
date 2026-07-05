# 🏗️ 1. O que é Arquitetura de Software?

👉 Definição simples:

> **Arquitetura de software é a organização estrutural do sistema**, definindo **componentes, responsabilidades e como eles se comunicam**.

---

## 🧠 Em outras palavras

* Requisitos dizem **o que fazer**
* Arquitetura define **como organizar para fazer**

---

## 💡 Exemplo intuitivo

Sistema de e-commerce:

* Frontend (telas)
* Backend (regras)
* Banco de dados

👉 Isso já é uma decisão arquitetural

---

# 📘 2. Onde entra no documento?

## ❌ Não é parte da ERS (requisitos)

## ✅ Documento separado ou seção própria:

```text
3. Arquitetura do Sistema
```

---

## 📌 Estrutura típica

```text
3. Arquitetura
3.1 Visão geral
3.2 Estilo arquitetural
3.3 Componentes
3.4 Diagrama
3.5 Tecnologias
```

---

# 🧩 3. O que a arquitetura define

* Componentes (ex: API, banco)
* Comunicação (REST, eventos)
* Organização (camadas, serviços)
* Tecnologias (às vezes)
* Padrões estruturais

---

# 🧠 4. Tipos de Arquitetura (principais)

---

# 🏢 4.1 Arquitetura em Camadas (Layered)

👉 A mais comum (e perfeita pra ensino)

---

## 💡 Estrutura

```text
Apresentação (UI)
↓
Negócio (Regras)
↓
Dados (Persistência)
```

---

## 💻 Exemplo PHP

```php
// Controller (camada apresentação)
class ProdutoController {
    public function listar() {
        return ProdutoService::listar();
    }
}
```

---

## 📐 UML (simplificado)

```text
Controller → Service → Repository → Banco
```

---

## ✅ Vantagens

* Organização clara
* Fácil manutenção
* Muito usada

---

# 🌐 4.2 Cliente-Servidor

👉 Separação entre cliente e servidor

---

## 💡 Exemplo

* Cliente → navegador
* Servidor → PHP

---

## 📐

```text
Cliente → Servidor → Banco
```

---

# 🧱 4.3 Monolítica

👉 Tudo junto em uma aplicação

---

## 💡 Exemplo

* Um único sistema PHP (tipo sistema acadêmico simples)

---

## ✅ Vantagens

* Simples
* Fácil deploy

---

## ❌ Desvantagens

* Difícil escalar

---

# 🔗 4.4 Microservices

👉 Sistema dividido em vários serviços independentes

---

## 💡 Exemplo

* Serviço de usuários
* Serviço de pedidos
* Serviço de pagamento

---

## 📐

```text
[User] [Pedido] [Pagamento]
   \      |       /
        API
```

---

## ✅ Vantagens

* Escalável
* Independência

---

## ❌ Desvantagens

* Complexo
* Comunicação distribuída

---

# 📦 4.5 MVC (muito importante em PHP)

👉 Especialização da arquitetura em camadas

---

## 💡 Estrutura

* Model → dados
* View → interface
* Controller → lógica

---

## 💻 Exemplo

```php
class ProdutoController {
    public function listar() {
        $produtos = Produto::all();
        return view("produtos", $produtos);
    }
}
```

---

## 📐

```text
Controller → Model → Banco
Controller → View
```

---

# 🧠 4.6 Arquitetura baseada em eventos

👉 Sistema reage a eventos

---

## 💡 Exemplo

* Pedido pago → dispara ações

---

# ⚙️ 4.7 Arquitetura Hexagonal (avançado)

👉 Separação forte entre domínio e infraestrutura

---

## 💡 Ideia

```text
Domínio (centro)
↕
Portas/Adapters
```

---

👉 Mais comum em projetos maiores

---

# 📊 5. Comparação rápida

| Arquitetura      | Simples | Escalável | Uso     |
| ---------------- | ------- | --------- | ------- |
| Camadas          | ✅       | médio     | padrão  |
| MVC              | ✅       | médio     | web     |
| Monolito         | ✅       | ❌         | pequeno |
| Microservices    | ❌       | ✅         | grande  |
| Cliente-servidor | ✅       | médio     | geral   |

---

# 🧪 6. Exemplo para trabalho

👉 Você pode escrever assim:

```text
O sistema adotará arquitetura em camadas, organizada em três níveis principais: apresentação, lógica de negócio e persistência de dados. Essa abordagem facilita a manutenção, reutilização e evolução do sistema.
```

---

# 📐 7. Diagrama simples para colocar no trabalho

```text
[Interface]
     ↓
[Regras de Negócio]
     ↓
[Banco de Dados]
```

---

# ⚠️ 8. Erros comuns

❌ Confundir arquitetura com diagrama de classes
❌ Colocar código detalhado demais
❌ Misturar arquitetura com requisitos
❌ Não justificar escolha

---

# 🎯 9. Como escolher arquitetura (pra aula)

Perguntas:

* Sistema pequeno? → monolito
* Web? → MVC
* Crescimento grande? → microservices
* Ensino? → camadas

---

# 🚀 10. Fechamento

* Arquitetura = **organização do sistema**
* Define estrutura e comunicação
* Vem **depois dos requisitos**
* Orienta implementação

---

# 💡 Frase forte pra aula

> “Requisitos dizem o que o sistema deve fazer.
> Arquitetura define como ele será construído.”

---

