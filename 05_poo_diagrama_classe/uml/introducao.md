# 📍 Aula 4 – Linguagens de Modelagem

### 🎯 Objetivo

Apresentar as principais linguagens de modelagem de software (UML e BPMN), seus diagramas e aplicações no projeto de sistemas.

---

### ⏱️ Duração sugerida: 1h30–2h

---

## 1. Introdução: Por que modelar? (20 min)

* **Problema inicial:** requisitos e arquitetura podem ser difíceis de entender apenas com texto.
* **Função da modelagem:**

  * Facilitar a **comunicação** entre desenvolvedores, analistas e clientes.
  * Representar o sistema de forma **visual e padronizada**.
  * Servir como **documentação complementar** ao código e requisitos.
* Pergunta provocativa: *“É possível construir um prédio sem planta? E um sistema sem modelos?”*

---

## 2. UML – Unified Modeling Language (50–60 min)

### 🔹 O que é UML

* Linguagem padrão para **modelar sistemas orientados a objetos**.
* Criada para unificar notações diferentes (Booch, OMT, OOSE).
* Usada tanto na análise quanto no design.

### 🔹 Categorias de Diagramas

1. **Diagramas Estruturais (estáticos)**

   * Representam a *estrutura* do sistema.
   * Exemplos:

     * **Diagrama de Classes:** classes, atributos, métodos e relacionamentos.
     * **Diagrama de Componentes:** módulos e suas dependências.
     * **Diagrama de Implantação (Deployment):** hardware, servidores e onde os componentes rodam.

2. **Diagramas Comportamentais (dinâmicos)**

   * Representam a *interação* e o *comportamento* do sistema.
   * Exemplos:

     * **Casos de Uso:** funcionalidades do ponto de vista do usuário.
     * **Diagrama de Sequência:** ordem das interações entre objetos.
     * **Diagrama de Atividades:** fluxo de processos ou algoritmos.
     * **Diagrama de Estados:** estados possíveis de um objeto e suas transições.

### 🔹 Boas Práticas com UML

* Não usar todos os diagramas em todo projeto → escolher os relevantes.
* Diagramas devem ser claros e simples, não “poluídos”.
* Usar UML como **meio de comunicação**, não como fim burocrático.

---

## 3. BPMN – Business Process Model and Notation (30–35 min)

### 🔹 O que é BPMN

* Notação padronizada para **modelagem de processos de negócio**.
* Mais usada em **análise organizacional e fluxos de trabalho** do que em programação diretamente.
* Ajuda a alinhar **processos de negócio** com **sistemas de software**.

### 🔹 Elementos básicos

* **Eventos:** início, intermediário, fim.
* **Atividades:** tarefas ou subprocessos.
* **Gateways:** decisões e ramificações.
* **Fluxos de sequência:** setas que conectam atividades.
* **Pools e Lanes:** responsáveis (ex.: setores da empresa).

### 🔹 Exemplo aplicado

* Processo de compra online:

  * Cliente faz pedido → sistema verifica estoque → gera pagamento → confirma entrega.
* Representação em BPMN mostra claramente as responsabilidades de cliente, sistema e fornecedor.

---

### 📚 Materiais de Apoio

* Exemplos visuais de diagramas UML e BPMN (StarUML, Visual Paradigm).
* Modelos simplificados de casos de uso, classes e BPMN em slides.
* Exercício de comparação: UML foca no *sistema*, BPMN foca no *processo de negócio*.


