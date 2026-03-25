# Requisitos Funcionais e Não Funcionais e Métodos de Priorização

Requisitos de software são descrições das funcionalidades (**requisitos funcionais**) e qualidades (**requisitos não funcionais**) que um sistema deve possuir. Priorizá-los é essencial para garantir que o desenvolvimento se concentre no que é mais importante, especialmente em projetos com recursos e tempo limitados.

## Requisitos Funcionais

Definem "o quê" o sistema deve fazer. Descrevem as funcionalidades e comportamentos específicos que o usuário final pode observar ou interagir.

**Exemplos:**
- O sistema deve permitir que o usuário crie uma nova conta com nome de usuário e senha.
- O sistema deve permitir que o usuário adicione itens a um carrinho de compras virtual.
- O sistema deve gerar relatórios de vendas mensais.
- O sistema deve exibir uma lista de produtos disponíveis em estoque.

## Requisitos Não Funcionais

Definem "como" o sistema deve executar suas funções. Eles são atributos de qualidade, restrições e características que influenciam a experiência geral do usuário e a operação do sistema.

**Exemplos:**
- **Desempenho:** O sistema deve carregar a página inicial em menos de dois segundos.
- **Segurança:** Todas as senhas dos usuários devem ser criptografadas.
- **Usabilidade:** A interface do usuário deve ser intuitiva para um novo usuário navegar sem treinamento.
- **Confiabilidade:** O sistema deve estar disponível 99,9% do tempo, exceto em janelas de manutenção agendadas.
- **Escalabilidade:** O sistema deve suportar 1.000 usuários simultâneos sem queda de desempenho.
- **Portabilidade:** O aplicativo deve ser compatível com as versões mais recentes dos navegadores Chrome, Firefox e Edge.

## Métodos de Priorização de Requisitos

A priorização é um processo crucial para gerenciar o escopo de um projeto e focar nos requisitos mais valiosos.

### 1. Método MoSCoW

Este método categoriza os requisitos em quatro níveis para alinhar as prioridades com as partes interessadas:

- **Must have (M):** Requisitos obrigatórios, sem os quais o produto não pode ser lançado.
- **Should have (S):** Requisitos importantes que melhoram o produto, mas que não impedem seu lançamento se não forem implementados.
- **Could have (C):** Requisitos desejáveis, de menor impacto, que podem ser incluídos se houver tempo e recursos disponíveis.
- **Won't have (W):** Requisitos de baixa prioridade que não serão implementados na versão atual.

### 2. Modelo Kano

Baseado na satisfação do cliente, este método classifica as funcionalidades em cinco categorias:

- **Básicas:** Funcionalidades essenciais que os clientes esperam e cuja ausência causa insatisfação (ex.: o carro tem rodas).
- **De desempenho:** Aumentam a satisfação do cliente à medida que são aprimoradas (ex.: quanto mais rápido o carro for, mais o cliente fica satisfeito).
- **Atrativas:** Funcionalidades inesperadas que encantam os clientes, mas cuja ausência não causa insatisfação.
- **Indiferentes:** Funcionalidades que não impactam a satisfação do cliente.
- **Reversas:** Funcionalidades que causam insatisfação se estiverem presentes.

### 3. Análise de Valor vs. Risco

Este método envolve classificar os requisitos em uma matriz com base em seu valor para o negócio e o risco de implementação:

- **Alto valor, baixo risco:** Implementar primeiro.
- **Alto valor, alto risco:** Considerar cuidadosamente, mas pode ser feito em seguida.
- **Baixo valor, baixo risco:** Implementar por último ou deixar para versões futuras.
- **Baixo valor, alto risco:** Evitar a implementação, a menos que necessário.

### 4. Técnica de Pontuação (100 Pontos)

Cada parte interessada recebe 100 pontos para distribuir entre todos os requisitos, atribuindo mais pontos aos que consideram mais importantes. O resultado é um ranking claro dos requisitos mais valorizados.

### 5. Técnica RICE

Uma técnica que quantifica o **Impacto (Impact)**, o **Alcance (Reach)**, a **Confiança (Confidence)** e o **Esforço (Effort)** para calcular uma pontuação de prioridade:

- **Reach:** Quantos usuários serão impactados.
- **Impact:** O efeito da funcionalidade no usuário.
- **Confidence:** A certeza de que o recurso terá o impacto e o alcance esperados.
- **Effort:** O custo e a dificuldade para desenvolver a funcionalidade.


