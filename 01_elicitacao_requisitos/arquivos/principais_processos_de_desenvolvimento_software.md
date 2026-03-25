# 1️⃣ Modelo em Cascata

### Como funciona

O desenvolvimento acontece **em fases sequenciais**, onde uma fase termina antes da próxima começar.

**Etapas típicas**

1. Requisitos
2. Projeto (design)
3. Implementação
4. Testes
5. Manutenção

### Papel do SRS

* Criado **no início do projeto**
* **Muito detalhado**
* Serve como **base para todas as outras fases**
* Mudanças são **difíceis e custosas**

### Quando é mais usado

* Sistemas **bem definidos**
* Projetos **estáveis**
* Ambientes com **muita documentação**

---

# 2️⃣ Modelo Incremental

### Como funciona

O sistema é construído **em partes chamadas incrementos**.
Cada incremento adiciona **novas funcionalidades ao sistema**.

**Exemplo**

* Versão 1: login
* Versão 2: cadastro
* Versão 3: relatórios

### Papel do SRS

* Existe um **SRS geral do sistema**
* Cada incremento detalha **parte dos requisitos**
* O documento pode **crescer com o projeto**

### Vantagens

* Entregas **mais rápidas**
* Feedback **mais cedo**

### Desvantagens

* Exige **boa arquitetura inicial**

---

# 3️⃣ Modelo Iterativo

### Como funciona

O sistema é desenvolvido em **iterações repetidas**, melhorando o sistema gradualmente.

**Ideia principal**
Construir uma versão simples → melhorar → melhorar novamente.

### Papel do SRS

* Começa **mais simples**
* Vai sendo **refinado a cada iteração**
* Requisitos podem **mudar ao longo do projeto**

### Vantagens

* Mais **flexível**
* Permite **aprender durante o desenvolvimento**

### Desvantagens

* Pode exigir **mais gestão do projeto**

---

# 4️⃣ Modelo Espiral

### Como funciona

É um modelo **baseado em ciclos**, mas com **análise de riscos em cada ciclo**.

Cada volta da espiral tem etapas como:

1. Planejamento
2. Análise de riscos
3. Desenvolvimento
4. Avaliação do cliente

### Papel do SRS

* Existe um **SRS inicial**
* Ele é **revisado a cada ciclo**
* Requisitos podem ser **ajustados conforme riscos e feedback**

### Vantagens

* Muito bom para **projetos complexos**
* Reduz **riscos técnicos**

### Desvantagens

* **Mais caro e complexo de gerenciar**

---

# 📊 Comparação geral

| Modelo      | Estrutura                   | Mudança de requisitos | Uso do SRS              |
| ----------- | --------------------------- | --------------------- | ----------------------- |
| Cascata     | Sequencial                  | Difícil               | Completo no início      |
| Incremental | Por partes                  | Moderada              | Geral + por incremento  |
| Iterativo   | Repetições                  | Fácil                 | Evolui com o projeto    |
| Espiral     | Ciclos com análise de risco | Alta                  | Atualizado a cada ciclo |

---

✅ **Resumo simples para lembrar**

* **Cascata → linear e rígido**
* **Incremental → sistema em partes**
* **Iterativo → sistema melhorado várias vezes**
* **Espiral → ciclos com análise de risco**



