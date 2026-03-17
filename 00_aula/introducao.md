# 📍 Aula 1 – Especificação e Levantamento de Requisitos

### 🎯 Objetivos de Aprendizagem

* Entender a importância dos requisitos no sucesso de projetos de software.
* Diferenciar requisitos funcionais e não funcionais.
* Conhecer técnicas de elicitação e priorização de requisitos.

---

### ⏱️ Duração sugerida: 1h30–2h

---

## 1. Introdução e Conceitos Fundamentais (35–40 min)

* **Problema inicial:** apresentar dados de falhas em projetos de software (ex.: Standish CHAOS Report → \~70% dos projetos falham por problemas de requisitos).
* **Conceitos-chave:**

  * O que é um **requisito de software**.
  * Tipos de requisitos:

    * **Funcionais:** descrevem o comportamento e as funcionalidades do sistema.
    * **Não funcionais:** descrevem restrições de qualidade, desempenho, segurança, usabilidade, confiabilidade, manutenibilidade etc.
* **Exemplos didáticos:**

  * *Funcional:* “O sistema deve permitir que o usuário cadastre uma tarefa.”
  * *Não funcional:* “O sistema deve exibir a lista de tarefas em menos de 2 segundos.”
* **Características de um bom requisito:**

  * Claro e objetivo.
  * Consistente (sem contradições).
  * Testável (possível verificar se foi atendido).
  * Necessário (não redundante).
* **Consequências de requisitos mal definidos:**

  * Atrasos, retrabalho, aumento de custos, insatisfação do cliente.

---

## 2. Técnicas de Elicitação de Requisitos (25 min)

Explicação com exemplos rápidos:

1. **Entrevistas** – Ex.: conversar com usuário final sobre necessidades.
2. **Questionários** – Ex.: levantar preferências de muitos usuários.
3. **Observação** – Ex.: acompanhar processo manual de trabalho.
4. **Brainstorming** – Ex.: reunir equipe para propor funcionalidades.
5. **Prototipagem** – Ex.: rascunho de tela em papel ou Figma para feedback.

👉 Ponto-chave: **combinar técnicas** aumenta a qualidade da coleta.

---

## 3. Priorização de Requisitos (35–40 min)

* **Por que priorizar?** Nem sempre há tempo e recursos para implementar tudo.
* **Critérios de priorização:**

  * Valor para o cliente.
  * Custo e esforço de implementação.
  * Risco associado.
* **Métodos comuns:**

  * **MoSCoW:**

    * *Must have* (essencial).
    * *Should have* (importante, mas não crítico).
    * *Could have* (desejável, se sobrar tempo).
    * *Won’t have* (não será feito agora).
    
  * **Kano Model:**

    * *Básicos* → o usuário espera (se faltar, há insatisfação).
    * *Desempenho* → quanto mais, melhor (ex.: velocidade).
    * *Encantadores* → o usuário não espera, mas gera satisfação extra.


* **Exemplo aplicado:**

  * Sistema de lista de tarefas.

    * Must have: adicionar/editar/excluir tarefas.
    * Should have: lembrete por notificação.
    * Could have: integração com calendário externo.
    * Won’t have: reconhecimento de voz (nesta versão).


