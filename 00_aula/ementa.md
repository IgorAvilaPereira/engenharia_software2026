## Ementa

Os **estudos sobre ferramentas, técnicas e metodologias para a especificação e projeto de sistemas de software** fazem parte da área de **Engenharia de Requisitos e Projeto de Software**, dentro da Engenharia de Software. Esses estudos buscam organizar o processo de desenvolvimento, permitindo compreender o problema, definir soluções adequadas e estruturar o sistema antes da implementação.

Nesse contexto, a disciplina aborda **como planejar, modelar, documentar e projetar softwares**, além de apresentar **ferramentas, linguagens de modelagem e processos de desenvolvimento** que tornam o processo de construção de sistemas mais organizado, eficiente e compreensível.

---

# 1. Especificação de Sistemas de Software

A **especificação de software** é o processo de definir de forma clara e detalhada **o que o sistema deve fazer e quais restrições deve atender**.

Esse processo resulta em um documento formal conhecido como **Especificação de Requisitos de Software (ERS ou SRS – Software Requirements Specification)**.

A especificação normalmente descreve:

* funcionalidades do sistema
* requisitos funcionais e não funcionais
* requisitos de desempenho
* restrições tecnológicas
* regras de negócio
* interfaces com outros sistemas
* requisitos de segurança e usabilidade

Uma especificação bem elaborada é essencial para **reduzir erros durante o desenvolvimento e garantir que o sistema atenda às necessidades dos usuários**.

---

# 2. Técnicas para Especificação de Software

As **técnicas de especificação** auxiliam na identificação, análise e documentação dos requisitos do sistema.

## 2.1 Elicitação de Requisitos

A **elicitação de requisitos** consiste em obter informações sobre as necessidades do sistema junto aos stakeholders (usuários, clientes, gestores e especialistas).

Principais técnicas utilizadas:

* entrevistas com usuários e especialistas
* questionários
* observação do trabalho do usuário
* workshops e reuniões de levantamento
* brainstorming
* análise de documentos existentes

Essas técnicas ajudam a **compreender o problema e identificar as funcionalidades necessárias** para o sistema.

---

## 2.2 Análise e Modelagem de Requisitos

Após a coleta dos requisitos, eles precisam ser **organizados, analisados e representados por meio de modelos**.

Algumas técnicas utilizadas incluem:

* **casos de uso**
* **histórias de usuário**
* **diagramas de atividades**
* **diagramas de fluxo de dados**
* **modelagem conceitual**

Esses modelos ajudam a representar **como o sistema deve se comportar e como seus elementos se relacionam**.

---

## 2.3 Prototipação

A **prototipação** consiste na criação de uma versão simplificada do sistema para validar requisitos com os usuários antes da implementação.

Tipos de protótipos:

* **protótipo descartável** – usado apenas para entender requisitos
* **protótipo evolutivo** – evolui gradualmente até se tornar o sistema final

Benefícios da prototipação:

* melhora a comunicação com o cliente
* reduz ambiguidades nos requisitos
* identifica erros e inconsistências precocemente

Além disso, ferramentas modernas permitem criar **protótipos de interface**, facilitando a validação da experiência do usuário.

---

# 3. Projeto de Sistemas de Software

O **projeto de software (software design)** define **como o sistema será construído para atender aos requisitos especificados**.

Enquanto a especificação responde à pergunta:

**“O que o sistema deve fazer?”**

o projeto responde:

**“Como o sistema será implementado?”**

O projeto normalmente envolve:

* definição da arquitetura do sistema
* organização da estrutura de dados
* definição de módulos e componentes
* definição de interfaces entre partes do sistema
* aplicação de padrões de projeto

---

## 3.1 Projeto Arquitetural

O **projeto arquitetural** define a estrutura geral do sistema, identificando os principais componentes e suas interações.

Alguns exemplos de arquiteturas de software são:

* arquitetura em camadas
* arquitetura cliente-servidor
* arquitetura orientada a serviços (SOA)
* arquitetura baseada em microserviços

Essa etapa permite organizar o sistema de forma **modular, escalável e de fácil manutenção**.

---

## 3.2 Projeto Detalhado

O **projeto detalhado** descreve elementos específicos do sistema, como:

* classes e objetos
* algoritmos
* estruturas de dados
* interações entre componentes

Esse nível de detalhamento serve como **base direta para a implementação do código**.

---

# 4. Documentação de Software

A **documentação de software** registra todas as informações importantes sobre o sistema ao longo do desenvolvimento.

Ela pode incluir:

* documentos de requisitos
* diagramas de modelagem
* documentação técnica
* manuais de instalação
* manuais de usuário

Uma boa documentação facilita:

* manutenção do sistema
* evolução do software
* comunicação entre equipes
* transferência de conhecimento

Por isso, é importante seguir **boas práticas de padronização da documentação**.

---

# 5. Linguagens de Modelagem

As **linguagens de modelagem** são utilizadas para representar sistemas de software por meio de diagramas e modelos visuais.

A linguagem mais utilizada é a **UML (Unified Modeling Language)**.

Entre os principais diagramas da UML destacam-se:

* **diagramas de casos de uso** – mostram interações entre usuários e sistema
* **diagramas de classes** – representam a estrutura do sistema
* **diagramas de sequência** – mostram interações entre objetos ao longo do tempo
* **diagramas de estados** – representam mudanças de estado do sistema
* **diagramas de atividades** – modelam fluxos de processos

Esses modelos ajudam a **visualizar o sistema antes da implementação**, facilitando a comunicação entre analistas, desenvolvedores e clientes.

---

# 6. Paradigmas e Processos de Desenvolvimento de Software

Os **processos de desenvolvimento** definem como o software será planejado, desenvolvido e entregue.

Eles estabelecem:

* etapas do desenvolvimento
* responsabilidades da equipe
* artefatos produzidos
* fluxo de trabalho do projeto

## 6.1 Modelos Tradicionais

Alguns modelos tradicionais incluem:

### Modelo Cascata

O desenvolvimento ocorre em etapas sequenciais:

1. levantamento de requisitos
2. análise
3. projeto
4. implementação
5. testes
6. manutenção

Esse modelo é simples e estruturado, mas apresenta **baixa flexibilidade para mudanças**.

---

### Modelo Espiral

Combina desenvolvimento incremental com análise de riscos, permitindo evolução progressiva do sistema.

---

### Prototipação

Baseia-se na criação de protótipos do sistema para validar requisitos com os usuários antes do desenvolvimento final.

---

## 6.2 Metodologias Ágeis

As **metodologias ágeis** priorizam flexibilidade, colaboração e entregas rápidas de software funcional.

Exemplos de metodologias ágeis:

* **Scrum**
* **Extreme Programming (XP)**
* **Kanban**

Principais características:

* ciclos curtos de desenvolvimento
* feedback constante do cliente
* adaptação a mudanças
* trabalho colaborativo em equipe

---

# 7. Ferramentas Visuais de Modelagem e Projeto

Ferramentas visuais auxiliam na **criação de diagramas, modelos e documentação do sistema**.

Essas ferramentas são chamadas de **CASE tools (Computer-Aided Software Engineering)**.

Elas permitem:

* criar diagramas UML
* modelar sistemas visualmente
* documentar requisitos
* manter consistência entre modelos

Exemplos de ferramentas:

* Astah
* Visual Paradigm
* Lucidchart
* StarUML
* Draw.io

Além disso, existem ferramentas específicas para **prototipação de interfaces**, como:

* Figma
* Balsamiq
* Adobe XD

Essas ferramentas ajudam a validar o design do sistema antes da implementação.

---

# 8. Ferramentas de Apoio ao Desenvolvimento

Além das ferramentas de modelagem, existem ferramentas que auxiliam no processo de desenvolvimento de software.

Entre elas destacam-se:

### IDEs (Ambientes de Desenvolvimento Integrado)

* Eclipse
* IntelliJ IDEA
* Visual Studio Code

Essas ferramentas auxiliam na **escrita, organização e depuração do código**.

---

# 9. Importância da Especificação e do Projeto

A aplicação de técnicas, metodologias e ferramentas adequadas traz diversos benefícios:

* redução de erros no desenvolvimento
* melhor comunicação entre equipes
* maior qualidade do software
* documentação estruturada
* maior facilidade de manutenção e evolução do sistema

Sem uma especificação e um projeto bem definidos, o desenvolvimento tende a apresentar **retrabalho, atrasos e aumento de custos**.

---

# Resumo

O estudo de **ferramentas, técnicas e metodologias para especificação e projeto de software** envolve:

* levantamento e análise de requisitos
* modelagem de sistemas
* definição da arquitetura e estrutura do software
* uso de linguagens de modelagem como UML
* aplicação de metodologias de desenvolvimento
* utilização de ferramentas de apoio ao desenvolvimento

Esses elementos são essenciais para garantir que o software seja **bem planejado, documentado, compreensível e de alta qualidade**.
