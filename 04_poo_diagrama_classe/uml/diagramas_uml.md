# Diagramas UML

A **UML (Unified Modeling Language)** é uma linguagem padrão para modelar sistemas de software. Entre os diversos tipos de diagramas, quatro são fundamentais para a análise e projeto de sistemas: **diagrama de caso de uso, de classe, de sequência e de componentes**.

---

## 1. Diagrama de Caso de Uso

* **Objetivo:** Mostrar as funcionalidades que o sistema deve oferecer do ponto de vista do usuário ou ator externo.
* **Elementos principais:**

  * **Ator:** Representa usuários ou sistemas externos que interagem com o sistema.
  * **Caso de uso:** Uma funcionalidade ou serviço oferecido pelo sistema.
  * **Relacionamentos:** Associação (linha simples), inclusão (<<include>>), extensão (<<extend>>).
* **Exemplo:** Em um sistema de e-commerce, casos de uso podem ser “Realizar Login”, “Adicionar ao Carrinho”, “Finalizar Compra”.

✅ **Quando usar:** Na fase inicial de levantamento e validação de requisitos.

---

## 2. Diagrama de Classe

* **Objetivo:** Representar a estrutura estática do sistema, descrevendo classes, atributos, métodos e relacionamentos.
* **Elementos principais:**

  * **Classe:** Representada por um retângulo dividido em três partes (nome, atributos, métodos).
  * **Relacionamentos:** Associação, herança, agregação, composição.
* **Exemplo:** No e-commerce, uma classe `Produto` pode ter atributos `nome`, `preço` e métodos `calcularDesconto()`. Ela se relaciona com a classe `Carrinho`.

✅ **Quando usar:** Durante o design e modelagem da estrutura do sistema.

---

## 3. Diagrama de Sequência

* **Objetivo:** Mostrar a interação entre objetos ou componentes ao longo do tempo, detalhando a troca de mensagens.
* **Elementos principais:**

  * **Objetos/atores:** Representados no topo como linhas de vida.
  * **Mensagens:** Setas indicando chamadas de métodos ou trocas de informações.
  * **Tempo:** Representado verticalmente, de cima para baixo.
* **Exemplo:** Em um fluxo de compra online, o ator “Usuário” envia mensagem ao “Sistema” para “Adicionar Produto”, o “Sistema” consulta o “Banco de Dados” e retorna a confirmação.

✅ **Quando usar:** Para detalhar fluxos de interação e validar regras de negócio.

---

## 4. Diagrama de Componentes

* **Objetivo:** Representar a visão física de alto nível do sistema, mostrando **componentes de software** e suas dependências.
* **Elementos principais:**

  * **Componentes:** Módulos ou subsistemas (por exemplo, “Módulo de Pagamento”, “Módulo de Estoque”).
  * **Interfaces:** Pontos de comunicação entre componentes.
  * **Relacionamentos:** Dependências e conexões.
* **Exemplo:** No e-commerce, o sistema pode ser dividido em componentes: “Frontend Web”, “Serviço de Carrinho”, “Serviço de Pagamento”, “Banco de Dados”.

✅ **Quando usar:** Na arquitetura do sistema, para planejar a modularização e integração de partes.

---

Ótimo ponto 👌! O **Diagrama de Deploy (ou Implantação)** é mais um dos diagramas estruturais da UML, usado para mostrar **como o sistema será implantado fisicamente**, incluindo servidores, dispositivos, nós de rede e os artefatos (softwares) que rodam neles.

Aqui vai a explicação e um exemplo simples para complementar seu conjunto de diagramas:

---

# 5. Diagrama de Deploy (Implantação)

* **Objetivo:** Mostrar a **distribuição física** do sistema em hardware e infraestrutura.
* **Elementos principais:**

  * **Nós (nodes):** Servidores, dispositivos, containers, estações de trabalho.
  * **Artefatos:** Softwares, componentes ou módulos que serão executados nesses nós.
  * **Conexões:** Rede ou comunicação entre os nós.
* **Uso típico:** Planejamento de arquitetura física, infraestrutura de TI, nuvem ou integração de sistemas distribuídos.

---


✅ **Resumo atualizado dos diagramas:**

* **Caso de Uso:** mostra o que o sistema faz (funcionalidades).
* **Classe:** mostra a estrutura estática (dados e lógica).
* **Sequência:** mostra como objetos interagem ao longo do tempo.
* **Componentes:** mostra a arquitetura lógica do software.
* **Deploy:** mostra como o sistema é distribuído fisicamente (hardware/infra).


## Comparação Resumida

| Diagrama    | Foco                     | Nível de Detalhe | Usado em...                    |
| ----------- | ------------------------ | ---------------- | ------------------------------ |
| Caso de Uso | Funcionalidades externas | Alto nível       | Levantamento de requisitos     |
| Classe      | Estrutura estática       | Médio/alto       | Design do sistema              |
| Sequência   | Interações temporais     | Médio            | Modelagem de fluxos e cenários |
| Componentes | Arquitetura de software  | Alto nível       | Arquitetura e integração       |
| Deploy      | Arquitetura física       | Alto nível       | Infraestrutura e implantação   |

---

📌 **Resumo:**

* **Caso de uso** → mostra *o que* o sistema deve fazer.
* **Classe** → mostra *como* os dados e lógica são organizados.
* **Sequência** → mostra *como os objetos interagem ao longo do tempo*.
* **Componentes** → mostra *como o sistema é dividido em módulos físicos*.
* **Deploy** → mostra como o sistema é distribuído fisicamente.   

**Videos:**

* https://www.youtube.com/watch?v=C3xYBT3o_5k&list=PLucm8g_ezqNqCRGHGHoacCo6N1bfN7hXZ

