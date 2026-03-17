# 📘 Aula 2 - Resumo

## Capítulo: Elicitação, Análise e Priorização de Requisitos

A Engenharia de Requisitos é uma das etapas mais críticas do desenvolvimento de software, pois define **o que o sistema deve fazer** antes mesmo de qualquer implementação. Problemas nessa fase tendem a gerar retrabalho, aumento de custo e falhas no produto final.

O processo de Engenharia de Requisitos segue um fluxo bem definido, que organiza as atividades desde a descoberta até a validação dos requisitos.

---

## 🔄 Fluxo da Engenharia de Requisitos

A sequência mais comum das atividades é:

1. **Elicitação** — descoberta dos requisitos junto aos stakeholders
2. **Análise** — entendimento, refinamento e organização
3. **Priorização** — definição do que é mais importante
4. **Especificação** — documentação formal (ERS/SRS)
5. **Validação** — verificação com os stakeholders

Esse fluxo não é totalmente rígido: na prática, pode haver **iterações** entre as etapas.

---

## 🧠 Elicitação de Requisitos

A elicitação é o processo de **identificar as necessidades dos usuários e stakeholders**. É aqui que o sistema começa a tomar forma.

Diversas técnicas podem ser utilizadas, como entrevistas, questionários, workshops e observação. O objetivo é capturar tanto requisitos **funcionais** (o que o sistema faz) quanto **não funcionais** (restrições e qualidades).

Um erro comum é assumir que o cliente sabe exatamente o que quer. Na prática, o analista precisa **investigar, interpretar e validar constantemente**.

---

## 🔍 Análise de Requisitos

Após a coleta, os requisitos precisam ser organizados e refinados. Essa etapa envolve:

* Remoção de ambiguidades
* Identificação de conflitos
* Agrupamento por funcionalidade
* Modelagem (como casos de uso)

É nesse momento que começam a surgir representações mais estruturadas do sistema.

---

## 🎭 Casos de Uso

Os casos de uso são uma das principais ferramentas da análise. Eles descrevem **como os usuários interagem com o sistema**.

Um caso de uso é composto por elementos como:

* **Ator**: quem interage com o sistema
* **Fluxo principal**: sequência padrão de ações
* **Fluxos alternativos**: exceções ou variações
* **Pré-condições e pós-condições**

Os diagramas de caso de uso ajudam a visualizar o sistema de forma geral, enquanto as descrições textuais detalham o comportamento.

É importante destacar que casos de uso são utilizados principalmente na **análise e especificação**, e não na priorização diretamente — embora possam ajudar a entender a importância das funcionalidades.

---

## 📊 Priorização de Requisitos

Depois de entender os requisitos, é necessário decidir **o que deve ser feito primeiro**. Nem tudo pode ser implementado ao mesmo tempo, seja por limitações de tempo, custo ou equipe.

A priorização é essencial para:

* Entregar valor mais rápido
* Planejar releases
* Evitar desperdício de esforço

---

## 🧩 Principais Técnicas de Priorização

### 📌 Método MoSCoW

Divide os requisitos em quatro categorias:

* **Must have** → obrigatório
* **Should have** → importante, mas não essencial
* **Could have** → desejável
* **Won’t have** → não será implementado agora

Essa técnica é simples e muito usada em projetos ágeis.

---

### 📈 Modelo Kano

Classifica os requisitos com base na satisfação do usuário:

* **Básicos**: obrigatórios (se faltar, gera insatisfação)
* **De desempenho**: quanto melhor, maior a satisfação
* **Encantadores**: surpreendem o usuário

Esse modelo ajuda a entender **o impacto emocional das funcionalidades**.

---

### ⚖️ Outras Abordagens

Além das principais, também podem ser usadas:

* Votação entre stakeholders
* Análise de custo vs benefício
* Priorização por risco
* Valor de negócio

---

## 📚 Exemplo: Sistema de Biblioteca

Para ilustrar, considere um sistema de biblioteca.

Alguns requisitos podem ser:

* Cadastro de usuários
* Empréstimo de livros
* Controle de multas
* Notificação de atraso

Aplicando MoSCoW:

* **Must**: empréstimo e devolução
* **Should**: cadastro de usuários
* **Could**: notificações automáticas
* **Won’t**: integração com redes sociais

Já no modelo Kano:

* Empréstimo → básico
* Rapidez no sistema → desempenho
* Recomendações de leitura → encantador

---

## 🧾 Especificação de Requisitos

Após priorizar, os requisitos são documentados em um **ERS (Especificação de Requisitos de Software)** ou **SRS**.

Esse documento deve ser:

* Claro
* Completo
* Consistente
* Testável

É aqui que os casos de uso detalhados entram com mais força.

---

## ✅ Validação de Requisitos

A validação garante que os requisitos estão corretos e representam o que o cliente realmente precisa.

Pode envolver:

* Revisões com stakeholders
* Protótipos
* Testes de aceitação

O objetivo é evitar erros antes da implementação.

---

## 🧭 Onde entra o UML? 

A UML aparece principalmente nas etapas de:

* **Análise** → com diagramas de caso de uso: <b color='red'> Onde Estamos agora </b>

* **Projeto** → com diagramas mais técnicos (classe, sequência, etc.)

Ela não é uma etapa do processo, mas sim uma **ferramenta de apoio**.

---

## 🧠 Material Complementar: Mapa Mental

O mapa mental apresentado resume:

* O fluxo da Engenharia de Requisitos
* As técnicas de priorização
* A relação entre análise e modelagem

Ele serve como uma visão geral para revisão rápida.

---

## 🎯 Foco da Aula

O principal objetivo deste conteúdo é:

> **Compreender e aplicar técnicas de priorização de requisitos**

Ou seja, mais do que teoria, espera-se que o aluno consiga:

* Classificar requisitos
* Justificar prioridades
* Comparar diferentes técnicas

