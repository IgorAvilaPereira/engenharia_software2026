# 📍 Aula 3 – Documentação de Software

### 🎯 Objetivo

Compreender os principais **tipos de documentação de software**, sua função no ciclo de vida do sistema e boas práticas de criação e manutenção.

---

### ⏱️ Duração sugerida: 1h30–2h

---

## 1. Introdução: Por que documentar? (25 min)

* Problema comum: sistemas **sem documentação** → manutenção cara, dependência de pessoas, perda de conhecimento.
* **Importância da documentação:**

  * Facilita a **comunicação** entre equipe técnica, cliente e usuários.
  * Apoia a **manutenção e evolução** do sistema.
  * Fornece **rastreabilidade** (requisito → design → implementação → teste).
  * Permite **onboarding mais rápido** de novos desenvolvedores.
* Pergunta provocativa: *“Um software sem documentação pode ser considerado completo?”*

---

## 2. Tipos de Documentação de Software (60–70 min)

### 🔹 2.1 Documentação de Requisitos

* **Objetivo:** registrar o que o sistema deve fazer.
* Exemplos de artefatos:

  * Especificação de Requisitos de Software (ERS).
  * Casos de uso, histórias de usuário.
  * Regras de negócio.
* **Boa prática:** escrever requisitos claros, testáveis, não ambíguos.
* Exemplo:

  * Funcional: “O sistema deve permitir que o usuário cadastre tarefas.”
  * Não funcional: “A tela de tarefas deve carregar em até 2 segundos.”

---

### 🔹 2.2 Documentação de Projeto/Arquitetura

* **Objetivo:** mostrar como o sistema foi construído.
* Exemplos:

  * Diagramas UML (classes, sequência, estados, componentes).
  * Diagramas arquiteturais (camadas, cliente-servidor, microserviços).
  * Modelos de banco de dados.
* **Importância:** sem esse tipo de documentação, a manutenção e evolução ficam quase impossíveis.

---

### 🔹 2.3 Documentação Técnica (para desenvolvedores)

* Inclui detalhes de implementação.
* Exemplos:

  * Documentação de APIs (Swagger, OpenAPI, Postman).
  * Estrutura de diretórios e dependências do projeto.
  * Scripts de configuração e deploy.
* **Boa prática:** integrar documentação ao próprio código (ex.: comentários estruturados, docstrings, README.md no GitHub).

---

### 🔹 2.4 Documentação de Usuário

* **Objetivo:** apoiar quem vai utilizar o sistema.
* Exemplos:

  * Manuais do usuário.
  * FAQs, tutoriais, vídeos, guias passo a passo.
  * Tooltips e mensagens contextuais dentro do sistema.
* **Boa prática:** linguagem simples, visual, com exemplos práticos.

---

### 🔹 2.5 Documentação de Processos

* **Objetivo:** registrar como o desenvolvimento foi conduzido.
* Exemplos:

  * Backlog do produto (ex.: no Jira ou Trello).
  * Histórico de versões (changelog, release notes).
  * Atas de reuniões e decisões de projeto.
* **Importância:** ajuda a justificar escolhas e entender a evolução do software.

---

### 🔹 2.6 Documentação Viva vs. Morta

* **Documentação viva:** atualizada constantemente, integrada ao fluxo de trabalho (ex.: README.md, wiki, Swagger).
* **Documentação morta:** feita apenas no início, nunca atualizada → perde valor e pode até atrapalhar.
* **Princípio:** documentar o suficiente para apoiar o time e os usuários, sem excesso burocrático.

---

### 📚 Materiais de Apoio

* Exemplos de documentação real (GitHub de projetos open-source).
* Demonstração rápida de Swagger (API docs) e README.md.
* Exemplos de guias de usuário (capturas de tela, tutoriais).