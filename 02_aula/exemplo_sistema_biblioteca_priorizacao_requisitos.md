# Sistema de Biblioteca - Técnicas de Priorização de Requisitos

Abaixo estão **exemplos práticos de priorização de requisitos** usando algumas das técnicas mais comuns. Vou usar o mesmo **exemplo de sistema** para ficar mais fácil de entender.

📦 **Sistema exemplo:** sistema de **biblioteca digital**.

Requisitos identificados:

* R1 – usuário pode **buscar livros**
* R2 – usuário pode **emprestar livros**
* R3 – usuário recebe **notificação de atraso**
* R4 – sistema possui **recomendação de livros**
* R5 – sistema possui **modo escuro**
* R6 – integração com **redes sociais**

---

# 1️⃣ Priorização MoSCoW

Classifica requisitos em quatro níveis.

MoSCoW significa:

* **Must Have** → obrigatório
* **Should Have** → importante
* **Could Have** → desejável
* **Won’t Have (agora)** → não será feito nesta versão

### Exemplo

| Requisito                | Prioridade |
| ------------------------ | ---------- |
| Buscar livros            | Must       |
| Emprestar livros         | Must       |
| Notificação de atraso    | Should     |
| Recomendação de livros   | Could      |
| Modo escuro              | Could      |
| Integração redes sociais | Won’t      |

📌 Interpretação:

* sistema **não funciona sem buscar ou emprestar livros**
* recomendações são interessantes, mas **não essenciais**

---

# 2️⃣ Modelo Kano

Classifica requisitos conforme **impacto na satisfação do usuário**.

Categorias:

* **Básico (Must-be)** → esperado pelo usuário
* **Desempenho (Performance)** → quanto melhor, maior satisfação
* **Encantador (Delighter)** → surpreende o usuário

### Exemplo

| Requisito                | Categoria  |
| ------------------------ | ---------- |
| Buscar livros            | Básico     |
| Emprestar livros         | Básico     |
| Notificação de atraso    | Desempenho |
| Recomendação de livros   | Encantador |
| Modo escuro              | Encantador |
| Integração redes sociais | Encantador |

📌 Interpretação:

* usuário **espera conseguir buscar livros**
* recomendações são **algo que encanta**, mas não obrigatório

---

# 3️⃣ Valor de Negócio

Prioriza requisitos pelo **valor que entregam para a organização**.

Critério: impacto no negócio.

### Exemplo

| Requisito                | Valor |
| ------------------------ | ----- |
| Emprestar livros         | Alto  |
| Buscar livros            | Alto  |
| Notificação de atraso    | Médio |
| Recomendação de livros   | Médio |
| Modo escuro              | Baixo |
| Integração redes sociais | Baixo |

📌 Interpretação:

* emprestar livros é o **core do sistema**
* modo escuro não gera valor direto

---

# 4️⃣ Custo × Benefício

Avalia:

* **benefício**
* **custo de implementação**

### Exemplo

| Requisito                | Benefício | Custo | Prioridade |
| ------------------------ | --------- | ----- | ---------- |
| Buscar livros            | Alto      | Médio | Alta       |
| Emprestar livros         | Alto      | Médio | Alta       |
| Notificação atraso       | Médio     | Baixo | Alta       |
| Recomendação livros      | Médio     | Alto  | Média      |
| Modo escuro              | Baixo     | Baixo | Baixa      |
| Integração redes sociais | Baixo     | Alto  | Baixa      |

📌 Interpretação:

* notificação tem **bom benefício e baixo custo**
* redes sociais têm **baixo benefício e alto custo**

---

# 5️⃣ Priorização por Risco

Prioriza requisitos **mais arriscados primeiro**.

Riscos podem ser:

* tecnológicos
* integração
* desempenho

### Exemplo

| Requisito                | Risco |
| ------------------------ | ----- |
| Integração redes sociais | Alto  |
| Recomendação com IA      | Alto  |
| Emprestar livros         | Médio |
| Buscar livros            | Baixo |

📌 Interpretação:

* funcionalidades complexas devem ser **testadas primeiro**

---

# 🎓 Resumo didático para aula

| Técnica           | Pergunta que responde             |
| ----------------- | --------------------------------- |
| MoSCoW            | O que é essencial?                |
| Kano              | O que deixa o usuário satisfeito? |
| Valor de negócio  | O que gera mais valor?            |
| Custo × benefício | Vale a pena implementar?          |
| Risco             | O que é mais incerto ou difícil?  |



