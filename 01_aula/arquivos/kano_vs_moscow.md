# Kano vs Moscow

O **Modelo Kano** e o **método MoSCoW** são técnicas usadas na **priorização de requisitos**, mas possuem **objetivos e critérios diferentes** dentro da **Engenharia de Software**.

A principal diferença é **como cada método decide a importância de um requisito**.

---

# 1. Modelo Kano

O **Modelo Kano**, proposto por **Noriaki Kano**, analisa **o impacto de cada requisito na satisfação do usuário**.

Ou seja, ele responde:

👉 **“Como esse requisito afeta a satisfação do usuário?”**

### Classificações

| Categoria        | Significado                        |
| ---------------- | ---------------------------------- |
| Básico (Must-be) | obrigatório, esperado pelo usuário |
| Desempenho       | quanto melhor, maior a satisfação  |
| Encantamento     | surpreende o usuário               |
| Indiferente      | não muda a satisfação              |
| Reverso          | pode gerar insatisfação            |

### Foco

✔ experiência do usuário
✔ percepção de valor
✔ satisfação

---

# 2. Método MoSCoW

O **MoSCoW** é um método de **priorização de requisitos baseado na importância para o projeto**.

Ele responde:

👉 **“Quais requisitos precisam ser implementados primeiro?”**

### Classificações

| Categoria   | Significado                          |
| ----------- | ------------------------------------ |
| Must have   | obrigatório para o sistema funcionar |
| Should have | importante, mas não crítico          |
| Could have  | desejável, se houver tempo           |
| Won’t have  | não será implementado agora          |

### Foco

✔ planejamento do projeto
✔ gerenciamento de escopo
✔ priorização de entregas

---

# Diferença principal

| Critério        | Kano                     | MoSCoW                         |
| --------------- | ------------------------ | ------------------------------ |
| Base da análise | satisfação do usuário    | prioridade do projeto          |
| Objetivo        | entender valor percebido | definir ordem de implementação |
| Classificação   | tipos de satisfação      | níveis de prioridade           |
| Uso comum       | análise de produto       | gestão de requisitos           |

---

# Exemplo prático (Sistema de e-commerce)

| Requisito                | Kano         | MoSCoW |
| ------------------------ | ------------ | ------ |
| Login do usuário         | Básico       | Must   |
| Busca de produtos rápida | Desempenho   | Should |
| Recomendação inteligente | Encantamento | Could  |
| Tema personalizável      | Indiferente  | Won’t  |

---

✅ **Resumo simples**

* **Kano** → avalia **impacto na satisfação do usuário**
* **MoSCoW** → define **prioridade de implementação no projeto**

---

💡 Na prática, muitos projetos usam **os dois juntos**:

1. **Kano** → entender valor para o usuário
2. **MoSCoW** → definir o que entra primeiro no desenvolvimento

