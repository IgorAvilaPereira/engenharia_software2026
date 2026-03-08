
# Elicitação de Requisitos

A **elicitação de requisitos** é a etapa da **Engenharia de Software** responsável por **identificar, compreender e documentar as necessidades dos usuários e stakeholders** de um sistema. Existem diversas **técnicas e formas de elicitação** utilizadas para descobrir esses requisitos de maneira estruturada.

A seguir estão as principais.

---

# 1. Entrevistas

Uma das técnicas mais utilizadas.

Consiste em **conversar diretamente com usuários, clientes ou especialistas do domínio** para entender o problema e as necessidades do sistema.

### Tipos

* **Estruturada** – perguntas previamente definidas
* **Semiestruturada** – roteiro base com liberdade para explorar respostas
* **Não estruturada** – conversa livre

### Vantagens

* Permite aprofundar detalhes
* Possibilita esclarecer dúvidas imediatamente

### Desvantagens

* Pode ser demorada
* Depende da habilidade do entrevistador

---

# 2. Questionários

Consiste em **aplicar formulários com perguntas para vários usuários**.

### Tipos de perguntas

* **Fechadas** (sim/não, múltipla escolha)
* **Abertas** (respostas livres)

### Vantagens

* Coleta dados de muitas pessoas rapidamente
* Fácil tabulação de resultados

### Desvantagens

* Respostas podem ser superficiais
* Não permite aprofundamento imediato

---

# 3. Observação do usuário

Também chamada de **observação de campo**.

O analista **acompanha o usuário durante o trabalho real**, observando como as tarefas são realizadas.

### Vantagens

* Revela processos que os usuários esquecem de mencionar
* Mostra problemas reais do processo

### Desvantagens

* Pode demandar tempo
* Usuários podem mudar comportamento quando observados

---

# 4. Workshops de requisitos

Reuniões estruturadas com **vários stakeholders ao mesmo tempo**.

São usadas para:

* discutir necessidades
* resolver conflitos
* priorizar requisitos

Uma técnica conhecida nesse contexto é **JAD (Joint Application Development)**.

### Vantagens

* Rapidez na tomada de decisões
* Estimula colaboração

### Desvantagens

* Requer boa mediação
* Pode gerar conflitos entre participantes

---

# 5. Brainstorming

Técnica usada para **gerar muitas ideias rapidamente**.

Os participantes sugerem funcionalidades ou necessidades **sem julgamento inicial**.

Depois as ideias são analisadas e filtradas.

### Vantagens

* Estimula criatividade
* Pode revelar requisitos inovadores

---

# 6. Análise de documentos

Consiste em **estudar documentos existentes da organização**.

Exemplos:

* manuais
* relatórios
* planilhas
* sistemas antigos
* normas internas

### Vantagens

* Ajuda a entender o domínio
* Revela requisitos já formalizados

---

# 7. Prototipação

Criação de **protótipos do sistema** (interfaces ou fluxos) para que os usuários avaliem.

Tipos:

* **Protótipo de baixa fidelidade** (papel, wireframes)
* **Protótipo funcional**

### Vantagens

* Usuários entendem melhor vendo algo concreto
* Facilita validação de requisitos

---

# 8. Casos de uso

Técnica comum na **UML (Unified Modeling Language)**.

Descreve **como um usuário interage com o sistema para atingir um objetivo**.

Exemplo:

```
Caso de uso: Realizar pedido
Ator: Cliente

Fluxo principal:
1. Cliente seleciona produtos
2. Sistema calcula valor
3. Cliente confirma pedido
4. Sistema registra pedido
```

---

# 9. Histórias de usuário

Muito usadas em métodos ágeis como **Scrum**.

Formato típico:

> Como **[tipo de usuário]**
> eu quero **[funcionalidade]**
> para **[benefício]**

Exemplo:

> Como cliente, quero acompanhar meu pedido para saber quando será entregue.

---

# 10. Etnografia

Técnica mais profunda de observação do ambiente social do usuário.

O analista passa **períodos maiores observando o trabalho real**, entendendo cultura, processos e interações.

---

# Resumo das principais técnicas

| Técnica               | Quando usar                         |
| --------------------- | ----------------------------------- |
| Entrevistas           | entender profundamente necessidades |
| Questionários         | coletar opiniões de muitos usuários |
| Observação            | descobrir processos reais           |
| Workshops             | alinhar stakeholders                |
| Brainstorming         | gerar ideias                        |
| Análise de documentos | entender processos existentes       |
| Prototipação          | validar interface e funcionalidades |
| Casos de uso          | descrever interações com o sistema  |
| Histórias de usuário  | projetos ágeis                      |

---

✅ **Na prática**, projetos costumam usar **combinação de técnicas**, por exemplo:

* Entrevistas + observação
* Brainstorming + workshops
* Prototipação + histórias de usuário

