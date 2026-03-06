# 📄 Estrutura típica de um ERS (SRS)

A estrutura mais usada para um **Documento de Especificação de Requisitos de Software (ERS/SRS)** segue o padrão da **IEEE** (especialmente o padrão **IEEE 830 Software Requirements Specification**). Esse modelo organiza **todas as informações do sistema** de forma clara para desenvolvedores, clientes e testadores.


---


## 1️⃣ Introdução

Apresenta o contexto do sistema.

Normalmente inclui:

* **Propósito do documento**
* **Escopo do sistema**
* Definições e siglas
* Referências
* Visão geral do documento

📌 Aqui pode aparecer:

* referência ao **processo de desenvolvimento** (ex.: **Modelo em Cascata**, **Modelo Incremental**, etc.).

---

# 2️⃣ Descrição geral do sistema

Explica o sistema **de forma mais conceitual**.

Pode conter:

* Perspectiva do produto
* Funções gerais do sistema
* Características dos usuários
* Restrições do sistema
* Suposições e dependências

📌 Aqui podem aparecer:

* **diagramas de contexto**
* **visão geral de funcionalidades**

---

# 3️⃣ Requisitos específicos

Esta é **a parte mais importante do ERS**.

Ela costuma ser dividida em vários tipos de requisitos.

---

## 3.1 Requisitos Funcionais

Descrevem **o que o sistema deve fazer**.

Exemplo:

* RF01 – O sistema deve permitir cadastro de usuário
* RF02 – O sistema deve gerar relatórios

📌 Aqui pode ser aplicado o **Método MoSCoW** para **priorizar os requisitos**.

Exemplo:

| Requisito               | Prioridade  |
| ----------------------- | ----------- |
| Login do usuário        | Must Have   |
| Exportação de relatório | Should Have |
| Tema personalizável     | Could Have  |

---

## 3.2 Requisitos Não Funcionais

Definem **qualidades do sistema**, como:

* desempenho
* segurança
* usabilidade
* confiabilidade

Exemplo:

* O sistema deve responder em **menos de 2 segundos**.

---

## 3.3 Casos de Uso ou Cenários

Podem ser incluídos para mostrar **como o usuário interage com o sistema**.

Exemplo:

Caso de uso:

* Login no sistema

Ator:

* Usuário

Fluxo:

1. Usuário insere login
2. Sistema valida credenciais

---

## 3.4 Interfaces do sistema

Descreve:

* interface com usuário
* interface com hardware
* interface com outros sistemas
* APIs

---

# 4️⃣ Apêndices

Informações complementares:

* glossário
* diagramas adicionais
* regras de negócio

---

# 📊 Onde cada conceito entra

| Elemento                  | Onde aparece no ERS                 |
| ------------------------- | ----------------------------------- |
| Modelo em cascata         | introdução / metodologia do projeto |
| MoSCoW                    | priorização dos requisitos          |
| Requisitos funcionais     | seção de requisitos específicos     |
| Requisitos não funcionais | seção de requisitos específicos     |
| Casos de uso              | descrição dos requisitos funcionais |

---

✅ **Resumo simples para memorizar**

ERS normalmente segue esta lógica:

1. **Introdução**
2. **Descrição geral do sistema**
3. **Requisitos específicos**
4. **Apêndices**

Dentro dos **requisitos específicos** ficam:

* requisitos funcionais
* requisitos não funcionais
* casos de uso
* prioridades (MoSCoW ou etc.)



