# 📍 Aula 2 – Projeto de Sistemas: Modelagem e Arquitetura

### 🎯 Objetivo

Apresentar como transformar requisitos em **modelos arquiteturais de software**, mostrando estilos, diagramas e padrões arquiteturais mais utilizados.

## 1. Introdução: Da análise ao projeto (20 min)

* Relembrar a Aula 1: requisitos bem definidos = base para projetar soluções.
* Diferenciar **análise** e **projeto**:

  * *Análise* → entender o problema.
  * *Projeto* → estruturar a solução.
* **Motivação:** um sistema mal projetado pode até atender requisitos, mas será difícil de manter, escalar e evoluir.

---

## 2. Arquiteturas de Software (30 min)

### 🔹 Arquitetura em Camadas

* Divisão do sistema em níveis (apresentação, negócio, dados).
* Exemplo: sistemas web clássicos.

### 🔹 Cliente-Servidor

* Cliente envia requisição, servidor processa e devolve resposta.
* Exemplo: aplicações web e mobile que dependem de um backend.

### 🔹 Microserviços

* Componentes independentes comunicando-se por APIs.
* Vantagens: escalabilidade, manutenção isolada.
* Desafios: complexidade, orquestração.

---

<!--
## 3. Diagramas Arquiteturais (20 min)

* Função: comunicar a visão do sistema.
* Representação simples: **caixas** (componentes) e **setas** (comunicação).
* Tipos de visão:

  * **High-level:** cliente, servidor, banco de dados.
  * **Low-level:** módulos internos, serviços específicos.
* Exemplo: diagrama de app de lista de tarefas → interface (app), API, banco.

---
-->

## 3. Padrões Arquiteturais (30–35 min)

### 🔹 MVC (Model-View-Controller)

* Separação de responsabilidades:

  * **Model:** dados e lógica.
  * **View:** interface com usuário.
  * **Controller:** controle do fluxo de interação.
* Usado em frameworks como Django, Spring, Rails.

### 🔹 MVP (Model-View-Presenter)

* Evolução do MVC para aplicações com interfaces mais complexas.
* **Presenter** faz a mediação entre Model e View.
* Muito usado em apps desktop e mobile.

### 🔹 MVVM (Model-View-ViewModel)

* Adotado em aplicações modernas (WPF, Angular, Android).
* **ViewModel** expõe dados e comandos que a View consome.
* Facilita testes e separação de responsabilidades.

### 🔹 Microkernel (Plug-in Architecture)

* Núcleo mínimo + módulos/plugins externos.
* Exemplo: IDEs (Eclipse, IntelliJ), sistemas operacionais.

### 🔹 Pipe & Filter

* Processamento em etapas sequenciais.
* Exemplo: compiladores (análise léxica → sintática → semântica → código).

👉 Observação: cada padrão é escolhido de acordo com o contexto e requisitos do projeto.

---

