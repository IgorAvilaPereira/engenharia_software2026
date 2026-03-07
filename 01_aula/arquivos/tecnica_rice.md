# Técnica RICE

A **Técnica RICE** é um método de priorização de requisitos que quantifica a importância de funcionalidades com base em quatro fatores principais: **Reach (Alcance), Impact (Impacto), Confidence (Confiança) e Effort (Esforço)**. É amplamente utilizada em gestão de produtos e desenvolvimento ágil para tomar decisões objetivas sobre o que deve ser implementado primeiro.

## Componentes do RICE

1. **Reach (Alcance)**

   * Mede quantos usuários ou clientes serão impactados pela funcionalidade dentro de um período de tempo específico.
   * Geralmente quantificado em número de usuários, sessões ou eventos.
   * **Exemplo:** 5.000 usuários ativos mensais serão beneficiados.

2. **Impact (Impacto)**

   * Avalia o efeito da funcionalidade na experiência do usuário ou no negócio.
   * Pode ser categorizado qualitativamente ou numericamente (ex.: 3 = alto, 2 = médio, 1 = baixo).
   * **Exemplo:** Uma melhoria que aumenta a taxa de conversão em 10% é considerada de alto impacto.

3. **Confidence (Confiança)**

   * Reflete o grau de certeza sobre as estimativas de alcance e impacto.
   * Geralmente expresso em porcentagem, como 80% ou 90%.
   * **Exemplo:** Baseado em dados históricos, há 85% de confiança de que o recurso terá o impacto estimado.

4. **Effort (Esforço)**

   * Representa o custo, tempo e recursos necessários para desenvolver a funcionalidade.
   * Normalmente medido em pessoa-mês, semanas ou pontos de esforço.
   * **Exemplo:** Implementar a funcionalidade exige 2 semanas de trabalho de uma equipe de 3 desenvolvedores.

## Fórmula do RICE

A pontuação RICE é calculada pela fórmula:

$$
\text{Pontuação RICE} = \frac{Reach \times Impact \times Confidence}{Effort}
$$

* Quanto maior a pontuação, maior a prioridade da funcionalidade.

## Etapas de Aplicação

1. **Listar requisitos:** Levantar todas as funcionalidades a serem avaliadas.
2. **Estimativas:** Determinar Reach, Impact, Confidence e Effort para cada requisito.
3. **Calcular pontuação RICE:** Aplicar a fórmula para obter uma pontuação objetiva.
4. **Classificação:** Ordenar os requisitos do maior para o menor RICE score.
5. **Tomada de decisão:** Priorizar funcionalidades com pontuação mais alta.

## Benefícios da Técnica RICE

* **Objetividade:** Baseia-se em dados e estimativas quantitativas.
* **Transparência:** Todos os stakeholders podem entender como as prioridades foram definidas.
* **Foco em impacto e eficiência:** Prioriza funcionalidades que trazem mais valor pelo menor esforço.
* **Flexibilidade:** Pode ser aplicada a projetos de qualquer tamanho ou complexidade.

## Dicas Avançadas

* Combine RICE com outras técnicas (como MoSCoW ou Kano) para validar decisões.
* Reavalie as estimativas periodicamente conforme surgem novos dados ou feedback de usuários.
* Use métricas consistentes para Impact e Effort para manter comparabilidade entre funcionalidades.
* Considere diferentes horizontes de tempo para o Reach, ajustando de acordo com metas estratégicas.

## Exemplo Prático

| Requisito | Reach | Impact | Confidence | Effort | Pontuação RICE |
| --------- | ----- | ------ | ---------- | ------ | -------------- |
| R1        | 5000  | 3      | 80%        | 2      | 6000           |
| R2        | 2000  | 5      | 70%        | 1      | 7000           |
| R3        | 3000  | 2      | 90%        | 3      | 1800           |

Neste exemplo, R2 teria a maior prioridade, seguido de R1 e R3.

> A Técnica RICE oferece uma abordagem quantitativa e estruturada para priorizar funcionalidades, equilibrando impacto, alcance, confiança e esforço, garantindo decisões mais estratégicas e eficientes no desenvolvimento de produtos.

