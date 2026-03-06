O modelo segue práticas recomendadas pela **IEEE**, inspiradas no padrão **IEEE 830** e na norma **ISO/IEC/IEEE 29148**.

---

# Especificação de Requisitos de Software (ERS)

## Sistema de Requerimentos Acadêmicos

Versão: 1.0
Data: 2026
Autor: Equipe de Desenvolvimento

---

# 1. Introdução

## 1.1 Propósito do Documento

Este documento apresenta a **Especificação de Requisitos de Software (ERS)** do **Sistema de Requerimentos Acadêmicos**, uma aplicação destinada a gerenciar solicitações administrativas feitas por estudantes.

O objetivo deste documento é:

* Definir claramente os requisitos do sistema
* Servir como base para desenvolvimento
* Auxiliar na comunicação entre desenvolvedores, analistas e stakeholders
* Servir como referência para testes e validação

Este documento é utilizado durante o processo de **engenharia de requisitos**, área da **Software Engineering** responsável por identificar, documentar e gerenciar necessidades do sistema.

---

## 1.2 Escopo do Sistema

O sistema permitirá que estudantes realizem solicitações acadêmicas digitalmente, tais como:

* justificativa de faltas
* solicitação de segunda chamada de prova
* trancamento de matrícula
* aproveitamento de disciplinas
* emissão de declarações

O sistema também permitirá que servidores analisem e respondam essas solicitações.

Principais funcionalidades:

* autenticação de usuários
* criação e acompanhamento de requerimentos
* análise administrativa das solicitações
* geração de histórico acadêmico de solicitações

---

## 1.3 Definições, Acrônimos e Abreviações

| Termo        | Descrição                                      |
| ------------ | ---------------------------------------------- |
| ERS          | Especificação de Requisitos de Software        |
| Usuário      | Pessoa que utiliza o sistema                   |
| Requerimento | Solicitação administrativa                     |
| Protocolo    | Número gerado para identificar um requerimento |
| Sistema      | Sistema de Requerimentos Acadêmicos            |

---

## 1.4 Referências

Este documento foi elaborado com base em práticas descritas em:

* Normas da **IEEE**
* Engenharia de requisitos na **Software Engineering**
* Linguagens de modelagem como **UML**

---

# 2. Descrição Geral do Sistema

## 2.1 Perspectiva do Produto

O sistema será uma **aplicação web institucional** acessível por navegador.

Arquitetura prevista:

Cliente (browser)
↓
Servidor de Aplicação
↓
Banco de Dados

O sistema poderá futuramente integrar-se com o **sistema acadêmico institucional**.

---

## 2.2 Funções do Sistema

O sistema deverá permitir:

1. Autenticação de usuários
2. Registro de novos requerimentos
3. Upload de documentos
4. Consulta de status
5. Análise administrativa
6. Histórico de solicitações
7. Emissão de resposta ao estudante

---

## 2.3 Classes de Usuários

### Estudante

Usuário responsável por registrar solicitações.

Permissões:

* abrir requerimentos
* consultar status
* anexar documentos

### Servidor

Responsável por analisar requerimentos.

Permissões:

* visualizar solicitações
* deferir ou indeferir pedidos
* registrar parecer

### Administrador

Responsável por administrar o sistema.

Permissões:

* gerenciar usuários
* configurar tipos de requerimentos
* gerar relatórios

---

## 2.4 Ambiente Operacional

O sistema deverá funcionar nos seguintes ambientes:

* Navegadores web modernos
* Sistemas operacionais Windows, Linux e macOS
* Dispositivos móveis

Tecnologias possíveis:

* Backend: Java, Python ou Node.js
* Banco de dados: PostgreSQL ou MySQL

---

## 2.5 Restrições do Sistema

O sistema deve respeitar as seguintes restrições:

* acesso restrito por autenticação
* armazenamento seguro de documentos
* conformidade com políticas institucionais

---

# 3. Requisitos Funcionais

Requisitos funcionais descrevem **o que o sistema deve fazer**.

---

## RF01 – Autenticação de Usuário

O sistema deve permitir que usuários realizem login utilizando:

* matrícula
* senha institucional

Fluxo:

1. usuário acessa tela de login
2. informa credenciais
3. sistema valida informações
4. acesso ao sistema é liberado

---

## RF02 – Cadastro de Requerimento

O estudante deve poder registrar uma nova solicitação.

Dados necessários:

* tipo de requerimento
* descrição da solicitação
* anexos

Resultado:

* geração de número de protocolo

---

## RF03 – Upload de Documentos

O sistema deve permitir anexar arquivos.

Formatos permitidos:

* PDF
* JPG
* PNG

Tamanho máximo:

10 MB por arquivo.

---

## RF04 – Consulta de Status

O estudante deve visualizar o status da solicitação.

Status possíveis:

* enviado
* em análise
* deferido
* indeferido

---

## RF05 – Avaliação de Requerimento

Servidores devem poder avaliar solicitações.

Ações disponíveis:

* deferir
* indeferir
* solicitar documentos adicionais

---

## RF06 – Histórico de Requerimentos

O sistema deve armazenar histórico de todas as solicitações realizadas pelo estudante.

---

# 4. Requisitos Não Funcionais

Requisitos não funcionais descrevem **qualidades do sistema**.

---

## RNF01 – Desempenho

O tempo máximo de resposta do sistema deve ser de **até 3 segundos** para operações comuns.

---

## RNF02 – Segurança

O sistema deve possuir:

* autenticação segura
* controle de acesso por perfil
* criptografia de senha

---

## RNF03 – Disponibilidade

O sistema deve estar disponível **24 horas por dia**, exceto em períodos de manutenção programada.

---

## RNF04 – Usabilidade

O sistema deve possuir interface intuitiva e responsiva.

---

## RNF05 – Confiabilidade

O sistema deve garantir integridade dos dados armazenados.

---

# 5. Regras de Negócio

RN01 – Um estudante pode ter no máximo **5 requerimentos em análise simultaneamente**.

RN02 – O prazo máximo de análise é de **5 dias úteis**.

RN03 – Requerimentos sem documentação necessária podem ser indeferidos.

---

# 6. Modelagem do Sistema

Durante a etapa de projeto podem ser utilizados diagramas da **UML**.

Exemplos:

* diagrama de casos de uso
* diagrama de classes
* diagrama de sequência

---

## Exemplo de Caso de Uso

Caso de Uso: **Abrir Requerimento**

Ator: Estudante

Fluxo principal:

1. estudante acessa sistema
2. seleciona novo requerimento
3. informa dados da solicitação
4. anexa documentos
5. envia requerimento

Resultado:

O sistema gera um **número de protocolo**.

---

# 7. Modelo de Dados (Conceitual)

Principais entidades:

**Usuário**

* id_usuario
* nome
* matrícula
* senha

**Requerimento**

* id_requerimento
* tipo
* descrição
* status
* data

**Documento**

* id_documento
* nome_arquivo
* tipo
* caminho

---

# 8. Critérios de Aceitação

O sistema será considerado aceito quando:

* todos os requisitos funcionais forem implementados
* testes de segurança forem aprovados
* sistema estiver operacional em ambiente de produção

---

# 9. Planejamento de Validação

Testes previstos:

* testes unitários
* testes de integração
* testes de aceitação

---

# 10. Considerações Finais

A Especificação de Requisitos de Software é um documento essencial no desenvolvimento de sistemas, pois:

* reduz ambiguidades
* melhora comunicação entre equipes
* orienta o desenvolvimento
* facilita testes e manutenção

Uma boa ERS serve como **contrato técnico** entre stakeholders e equipe de desenvolvimento.
