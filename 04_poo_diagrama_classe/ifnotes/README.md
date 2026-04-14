# Exemplo IFnotes: Da Priorização à Implementação

Até aqui, vimos todo o processo de Engenharia de Requisitos — da elicitação até a validação. Agora, este material é expandido para mostrar **como os requisitos se conectam com a implementação real de um sistema**.

---

## 🔗 Transição: Requisitos → Sistema

Após a validação e priorização dos requisitos, inicia-se a construção do sistema. Os arquivos adicionados representam exatamente essa transição:

* Modelagem (UML)
* Banco de dados
* Interface
* Código backend
* Estrutura do projeto

Ou seja, saímos do **“o que fazer”** para o **“como fazer”**.

---

## 🧱 Estrutura do Projeto

Os arquivos indicam uma aplicação web simples, provavelmente baseada em:

* HTML + CSS (Bootstrap)
* JavaScript
* PHP
* Banco de dados SQL

A organização pode ser interpretada assim:

### 📁 Arquivos principais

* `index.html` → interface inicial do sistema
* `cadastrar.php` → processamento de dados (backend)
* `script.sql` → criação do banco de dados
* `bd.md` → documentação do banco
* `caso_de_uso.asta` → diagrama UML
* `bootstrap.min.css` / `bootstrap.bundle.min.js` → estilização e componentes
* `package.json` → dependências (possivelmente Node ou organização do projeto)

---

## 🧠 Relação com Engenharia de Requisitos

Cada um desses arquivos corresponde a uma etapa já estudada:

| Etapa         | Artefato                              |
| ------------- | ------------------------------------- |
| Elicitação    | Requisitos levantados                 |
| Análise       | Casos de uso (`caso_de_uso.asta`)     |
| Priorização   | Definição do que implementar primeiro |
| Especificação | Documento + modelos                   |
| Implementação | Código (`PHP`, `HTML`, `SQL`)         |

---

## 🎭 Modelagem: Caso de Uso

O arquivo `caso_de_uso.asta` representa o sistema em nível funcional.

Provavelmente contém:

* Ator: usuário
* Ações: cadastrar, consultar, etc.

Isso conecta diretamente com a teoria:

> O diagrama de caso de uso é uma ponte entre requisitos e código.

---

## 🗄️ Banco de Dados

### 📄 `script.sql`

Define a estrutura do banco, por exemplo:

* Tabelas
* Campos
* Tipos de dados
* Relacionamentos

### 📄 `bd.md`

Serve como documentação, explicando:

* O propósito de cada tabela
* Regras de negócio
* Restrições

Aqui vemos claramente a transformação de requisitos em estrutura:

> “O sistema deve cadastrar usuários” → tabela `usuarios`

---

## 🌐 Interface do Sistema

### 📄 `index.html`

Representa a interface inicial.

Com o uso de:

* `bootstrap.min.css`
* `bootstrap.bundle.min.js`

O sistema ganha:

* Layout responsivo
* Componentes prontos (formulários, botões, etc.)

Essa parte está ligada à **validação**, pois permite:

* Testar com usuários
* Coletar feedback

---

## ⚙️ Backend

### 📄 `cadastrar.php`

Responsável por:

* Receber dados do formulário
* Processar informações
* Inserir no banco

Aqui ocorre a materialização de requisitos funcionais, como:

> “O sistema deve permitir cadastro de usuário”

---

## 📦 Gerenciamento de Projeto

### 📄 `package.json`

Mesmo sendo mais comum em projetos JavaScript, pode indicar:

* Uso de ferramentas auxiliares
* Organização de dependências
* Scripts de execução

Isso mostra uma preocupação com **estrutura e manutenção do sistema**.

---

## 🔄 Integração Completa

Podemos entender o fluxo completo assim:

1. Usuário acessa `index.html`
2. Preenche formulário
3. Dados são enviados para `cadastrar.php`
4. PHP executa comandos no banco (`script.sql`)
5. Dados são armazenados
6. Sistema responde ao usuário

---

## 🎯 Conexão com Priorização

A priorização influencia diretamente o que foi implementado primeiro.

Exemplo:

* Cadastro → implementado (Must have)
* Relatórios → pode não existir ainda (Could have)

Ou seja, o sistema reflete as decisões tomadas anteriormente.

---

## 🧭 Visão Geral Final

Agora o material cobre todo o ciclo:

1. **Entender o problema**
2. **Definir requisitos**
3. **Priorizar funcionalidades**
4. **Modelar o sistema**
5. **Implementar solução**

---

## 💡 Conclusão

Este conjunto de arquivos mostra algo essencial:

> Engenharia de Requisitos não é teoria isolada — ela guia toda a construção do software.

Quando bem aplicada:

* Evita retrabalho
* Melhora a qualidade
* Facilita a implementação

Quando mal feita:

* Gera sistemas incompletos
* Cria conflitos com o cliente
* Aumenta custo e tempo

---

* 📊 Gerar **diagrama UML (PlantUML)** a partir do sistema
* 🗄️ Revisar e melhorar o `script.sql` com boas práticas

Só me dizer 👍
