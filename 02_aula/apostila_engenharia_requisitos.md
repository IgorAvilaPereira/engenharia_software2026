# Apostila - Engenharia de Requisitos e Projeto de Software

## Introdução

O desenvolvimento de sistemas de software tornou-se uma atividade central na sociedade contemporânea. Organizações de diferentes setores dependem cada vez mais de sistemas computacionais para realizar suas operações, tomar decisões estratégicas e oferecer serviços aos seus usuários. Nesse contexto, o processo de construção de software deixou de ser uma atividade puramente técnica para se tornar uma disciplina estruturada, envolvendo métodos, processos e práticas sistemáticas que visam garantir qualidade, confiabilidade e alinhamento com as necessidades do negócio.

A Engenharia de Software surge como uma área da computação dedicada ao estudo e à aplicação de princípios de engenharia no desenvolvimento de sistemas de software. Seu objetivo principal é permitir que sistemas complexos sejam projetados, desenvolvidos e mantidos de forma organizada, previsível e eficiente. Diferentemente da programação isolada, a Engenharia de Software aborda o desenvolvimento de software como um processo que envolve múltiplas etapas, desde a compreensão do problema até a implementação, validação e manutenção da solução.

Dentro desse contexto, uma das áreas mais importantes da Engenharia de Software é a Engenharia de Requisitos. Essa área concentra-se na identificação, análise, documentação e validação das necessidades que um sistema deve atender. A correta compreensão dessas necessidades é fundamental para o sucesso de qualquer projeto de software, pois um sistema que não atende às expectativas dos usuários ou que resolve o problema errado dificilmente será considerado bem-sucedido.

Diversos estudos na área indicam que uma parcela significativa das falhas em projetos de software está relacionada a problemas nos requisitos. Requisitos mal definidos, incompletos, ambíguos ou inconsistentes podem gerar retrabalho, atrasos no cronograma, aumento de custos e insatisfação dos usuários. Dessa forma, investir tempo e esforço na definição adequada dos requisitos é essencial para reduzir riscos e aumentar a probabilidade de sucesso do projeto.

Além da definição dos requisitos, outro aspecto fundamental no desenvolvimento de sistemas é o projeto de software. Enquanto a Engenharia de Requisitos se preocupa em entender o que o sistema deve fazer, o projeto de software busca definir como o sistema será estruturado e implementado para atender a essas necessidades. O projeto envolve decisões relacionadas à arquitetura do sistema, organização dos componentes, definição de interfaces e escolha de tecnologias.

Esta apostila tem como objetivo apresentar os principais conceitos, técnicas e práticas relacionadas à Engenharia de Requisitos e ao Projeto de Software. O material foi organizado de forma progressiva, iniciando com os fundamentos da Engenharia de Requisitos, passando pelas técnicas de elicitação, análise e priorização de requisitos, e avançando até a especificação formal dos requisitos e o projeto arquitetural de sistemas.

Ao longo do texto, serão discutidos também conceitos relacionados à modelagem de sistemas, processos de desenvolvimento de software e ferramentas utilizadas no apoio às atividades de análise e projeto.

---

## Engenharia de Requisitos

A Engenharia de Requisitos pode ser definida como o conjunto de atividades responsáveis por descobrir, analisar, documentar e validar as necessidades de um sistema de software. Essas necessidades representam as funcionalidades, restrições e características de qualidade que o sistema deve possuir para atender às expectativas dos stakeholders.

O termo stakeholder refere-se a qualquer pessoa ou organização que possui interesse no sistema. Isso inclui usuários finais, clientes, gestores, desenvolvedores, analistas de sistemas e até mesmo entidades reguladoras. Cada grupo de stakeholders pode possuir expectativas diferentes em relação ao sistema, o que torna o processo de definição de requisitos um desafio que envolve comunicação, negociação e análise cuidadosa.

A Engenharia de Requisitos não se limita apenas à coleta de informações sobre o sistema. Ela envolve um processo estruturado composto por diversas atividades inter-relacionadas. Entre essas atividades destacam-se a elicitação de requisitos, a análise de requisitos, a priorização de requisitos, a especificação de requisitos e a validação de requisitos.

A elicitação de requisitos corresponde ao processo de descoberta das necessidades dos stakeholders. Durante essa etapa, os analistas procuram compreender como o sistema atual funciona, quais problemas precisam ser resolvidos e quais funcionalidades devem ser implementadas no novo sistema.

Após a coleta inicial dos requisitos, inicia-se a fase de análise, na qual as informações obtidas são organizadas, refinadas e avaliadas. O objetivo dessa etapa é identificar inconsistências, ambiguidades e conflitos entre requisitos, além de tornar as descrições mais precisas e compreensíveis.

A priorização de requisitos constitui outra atividade importante da Engenharia de Requisitos. Em muitos projetos, não é possível implementar todas as funcionalidades desejadas dentro do prazo ou do orçamento disponível. Nesse cenário, torna-se necessário determinar quais requisitos são mais importantes e devem ser implementados primeiro.

A especificação de requisitos envolve a documentação formal das necessidades do sistema. Essa documentação serve como base para o desenvolvimento do software e deve ser suficientemente clara e detalhada para que desenvolvedores, testadores e gestores compreendam o comportamento esperado do sistema.

Por fim, a validação de requisitos tem como objetivo verificar se os requisitos definidos representam corretamente as necessidades dos stakeholders. Essa etapa envolve revisões, prototipação e outras técnicas que permitem identificar possíveis problemas antes do início da implementação.

---

### Elicitação de Requisitos

A elicitação de requisitos representa uma das etapas mais importantes e, ao mesmo tempo, mais desafiadoras da Engenharia de Requisitos. Durante essa fase, os analistas procuram descobrir as necessidades reais dos usuários e demais stakeholders, muitas vezes em contextos onde essas necessidades não estão claramente definidas ou explicitadas.

Em muitos casos, os usuários possuem apenas uma ideia geral do sistema que desejam, sem conseguir expressar todos os detalhes necessários para sua implementação. Além disso, diferentes stakeholders podem possuir expectativas distintas, o que torna necessário um processo cuidadoso de comunicação e negociação.

Para apoiar a elicitação de requisitos, diversas técnicas podem ser utilizadas. Entre as mais comuns estão as entrevistas, os questionários, a observação do trabalho, os workshops colaborativos, o brainstorming e a análise de documentos existentes.

As entrevistas constituem uma das técnicas mais tradicionais de elicitação de requisitos. Nesse método, o analista conduz conversas com os stakeholders com o objetivo de compreender suas atividades, necessidades e expectativas em relação ao sistema. As entrevistas podem variar desde conversas informais até sessões estruturadas com perguntas previamente definidas.

Os questionários representam outra técnica utilizada quando se deseja coletar informações de um grande número de usuários. Eles permitem obter dados de forma relativamente rápida e padronizada, embora geralmente ofereçam menos profundidade em comparação às entrevistas.

A observação do trabalho consiste em acompanhar diretamente as atividades realizadas pelos usuários em seu ambiente de trabalho. Essa abordagem permite identificar tarefas, dificuldades e comportamentos que nem sempre são mencionados pelos usuários durante entrevistas ou questionários.

Os workshops de requisitos são reuniões estruturadas que reúnem diferentes stakeholders para discutir as necessidades do sistema. Durante essas sessões, os participantes podem compartilhar perspectivas, esclarecer dúvidas e resolver conflitos relacionados aos requisitos.

O brainstorming é frequentemente utilizado para estimular a geração de ideias e soluções. Nessa técnica, os participantes são incentivados a propor livremente sugestões sem julgamentos iniciais, permitindo explorar diferentes possibilidades para o sistema.

A análise de documentos existentes também pode fornecer informações valiosas sobre o domínio do problema. Documentos como relatórios, formulários, manuais e sistemas legados podem revelar processos e regras de negócio importantes para a definição dos requisitos.

---

### Análise de Requisitos

Após a coleta inicial dos requisitos, torna-se necessário realizar um processo de análise que permita organizar, refinar e avaliar as informações obtidas. Essa etapa busca transformar descrições muitas vezes vagas ou informais em requisitos claros, consistentes e compreensíveis.

Durante a análise de requisitos, os analistas procuram identificar possíveis inconsistências ou conflitos entre as necessidades expressas pelos diferentes stakeholders. Esses conflitos são relativamente comuns, pois cada grupo pode possuir interesses distintos em relação ao sistema.

Por exemplo, gestores podem priorizar funcionalidades relacionadas a relatórios e controle administrativo, enquanto usuários finais podem valorizar mais a simplicidade e a rapidez das interfaces. A resolução desses conflitos exige negociação e análise cuidadosa das necessidades do negócio.

Outro aspecto importante da análise de requisitos é o refinamento das descrições. Muitas vezes, requisitos iniciais são formulados de maneira vaga, utilizando termos subjetivos como rápido, fácil ou eficiente. Durante a análise, esses requisitos precisam ser transformados em descrições mais precisas e mensuráveis.

Além disso, os requisitos precisam ser organizados de forma estruturada. Isso pode envolver a identificação de funcionalidades principais do sistema, a definição de módulos ou subsistemas e a construção de modelos conceituais que representem os elementos fundamentais do domínio.

A modelagem desempenha um papel importante nessa etapa, pois permite representar visualmente aspectos do sistema. Diagramas e modelos ajudam a facilitar a comunicação entre analistas, desenvolvedores e stakeholders, além de contribuir para a identificação de lacunas ou inconsistências nos requisitos.

---

### Priorização de Requisitos

Em projetos reais de desenvolvimento de software, raramente é possível implementar todos os requisitos desejados pelos stakeholders dentro do prazo e do orçamento disponíveis. Por esse motivo, torna-se necessário estabelecer prioridades que orientem a definição do escopo do sistema.

A priorização de requisitos consiste no processo de determinar quais funcionalidades possuem maior importância ou valor para o projeto. Essa decisão pode considerar diversos fatores, incluindo o valor de negócio associado ao requisito, o risco técnico envolvido em sua implementação e o custo estimado de desenvolvimento.

Um dos métodos frequentemente utilizados para apoiar essa atividade é o método MoSCoW, que classifica os requisitos em categorias que indicam seu nível de importância. Essa classificação ajuda a equipe do projeto a concentrar seus esforços nas funcionalidades mais críticas para o sucesso do sistema.

Outra abordagem bastante conhecida é o modelo Kano, que analisa a relação entre funcionalidades do sistema e a satisfação do usuário. Esse modelo distingue diferentes tipos de requisitos, incluindo requisitos básicos, requisitos de desempenho e requisitos capazes de surpreender positivamente os usuários.

Além desses métodos, a análise de custo e benefício também pode ser utilizada para apoiar a priorização de requisitos. Nesse caso, procura-se avaliar o esforço necessário para implementar determinada funcionalidade em comparação com os benefícios que ela trará para a organização ou para os usuários.

---

### Especificação de Requisitos

A especificação de requisitos representa a etapa na qual as necessidades identificadas e analisadas são formalmente documentadas. O principal objetivo dessa documentação é fornecer uma descrição clara e completa do comportamento esperado do sistema.

O documento mais utilizado para esse propósito é conhecido como Especificação de Requisitos de Software, frequentemente abreviado como ERS ou SRS. Esse documento serve como referência para todas as etapas posteriores do desenvolvimento, incluindo projeto, implementação e testes.

Uma especificação de requisitos bem elaborada deve possuir diversas características importantes. Ela deve ser clara, evitando ambiguidades que possam gerar interpretações diferentes. Também deve ser completa, abrangendo todas as funcionalidades e restrições relevantes para o sistema. Além disso, deve ser consistente, garantindo que diferentes partes do documento não apresentem contradições.

Normalmente, a estrutura de um documento de especificação de requisitos inclui uma seção introdutória, que apresenta o objetivo e o escopo do sistema, seguida por uma visão geral do sistema e pela descrição detalhada dos requisitos funcionais e não funcionais.

Os requisitos funcionais descrevem as funcionalidades que o sistema deve oferecer aos usuários. Já os requisitos não funcionais descrevem características de qualidade do sistema, como desempenho, segurança, confiabilidade e usabilidade.

Além da descrição textual dos requisitos, o documento também pode incluir modelos e diagramas que ajudam a representar o comportamento do sistema. Esses modelos podem incluir diagramas de casos de uso, diagramas de atividades e modelos conceituais do domínio.

---

# Validação de Requisitos

A validação de requisitos corresponde ao processo de verificar se os requisitos definidos realmente representam as necessidades dos stakeholders. Essa etapa é fundamental para evitar que erros ou omissões sejam descobertos apenas durante as fases posteriores do desenvolvimento.

Uma das formas mais comuns de validação consiste na realização de revisões com os stakeholders. Durante essas revisões, os participantes analisam o documento de requisitos e discutem se as descrições estão corretas, completas e alinhadas com as expectativas do projeto.

A prototipação também pode ser utilizada como técnica de validação. Nesse caso, versões simplificadas do sistema são construídas para demonstrar determinadas funcionalidades ou interfaces. Esses protótipos permitem que os usuários visualizem como o sistema poderá funcionar, facilitando a identificação de problemas ou melhorias.

Existem diferentes tipos de protótipos. Os protótipos descartáveis são criados apenas para explorar ideias e são abandonados após cumprir seu propósito. Já os protótipos evolutivos são gradualmente refinados até se tornarem parte do sistema final.

---

### Projeto de Software

Após a definição e validação dos requisitos, inicia-se a fase de projeto de software. O objetivo dessa etapa é definir a estrutura do sistema que será desenvolvido, incluindo a organização de seus componentes e as relações entre eles.

O projeto de software pode ser dividido em diferentes níveis de abstração. O projeto arquitetural define a estrutura geral do sistema, incluindo os principais subsistemas e suas interações. Já o projeto detalhado descreve aspectos mais específicos, como classes, estruturas de dados e algoritmos.

A arquitetura de software desempenha um papel central nessa etapa, pois define os princípios e padrões que orientarão a construção do sistema. Diferentes estilos arquiteturais podem ser utilizados, dependendo das características do projeto e das necessidades da organização.

Entre os estilos arquiteturais mais comuns encontram-se a arquitetura em camadas, a arquitetura cliente-servidor e as arquiteturas baseadas em serviços ou microserviços. Cada abordagem apresenta vantagens e desvantagens que precisam ser avaliadas no contexto específico do sistema a ser desenvolvido.

---

### Conclusão

A Engenharia de Requisitos e o Projeto de Software constituem etapas fundamentais no desenvolvimento de sistemas de qualidade. Ao investir em processos estruturados de elicitação, análise, especificação e validação de requisitos, as equipes de desenvolvimento podem reduzir significativamente os riscos associados aos projetos de software.

Além disso, um projeto arquitetural bem elaborado contribui para a construção de sistemas mais organizados, flexíveis e fáceis de manter. A combinação dessas práticas permite que organizações desenvolvam soluções de software que realmente atendam às necessidades de seus usuários e tragam valor para o negócio.

---

Ótima pergunta — e ela é **muito importante didaticamente**, porque a **UML não pertence a apenas uma fase**. Ela aparece **principalmente na análise e no projeto**, mas alguns diagramas podem ajudar também na **elicitação**.

Vou responder primeiro a **parte conceitual (onde entra a UML)** e depois te entregar **uma estrutura de apostila expandida com todos os elementos sugeridos**: diagramas, ERS completo, exemplos e modelos.

---

## Onde a UML entra no processo de Engenharia de Requisitos?

A **UML (Unified Modeling Language)** é uma linguagem de modelagem usada para representar visualmente sistemas de software. Ela não é um processo de desenvolvimento, mas sim uma **lingagem de representação** que pode ser utilizada em diferentes etapas.

Na prática acadêmica e profissional, a UML aparece principalmente em **três momentos**.

## UML na elicitação de requisitos

Durante a elicitação, o foco principal é **entender o domínio do problema**. Nessa etapa, a UML ainda é usada de forma limitada, pois o objetivo é coletar informações junto aos stakeholders.

Mesmo assim, alguns modelos simples podem ajudar muito na comunicação. O exemplo mais comum é o **Diagrama de Casos de Uso**, que permite representar de forma visual quais interações os usuários terão com o sistema.

Esse tipo de diagrama ajuda os usuários a compreender rapidamente o escopo do sistema e muitas vezes facilita a descoberta de novos requisitos que não haviam sido mencionados inicialmente.

Portanto, na elicitação a UML pode aparecer **como ferramenta de apoio à comunicação**, mas ainda não como modelagem técnica detalhada.

---

### UML na análise de requisitos

É aqui que a UML passa a ser realmente utilizada.

Durante a análise, os requisitos coletados precisam ser organizados e refinados. Nesse momento, diagramas UML ajudam a estruturar melhor o entendimento do sistema.

Os diagramas mais comuns nessa fase são:

**Diagrama de Casos de Uso**

Representa as funcionalidades do sistema a partir da perspectiva do usuário.

**Diagrama de Atividades**

Mostra fluxos de processos e tarefas realizadas no sistema.

**Diagramas de Estado**

Utilizados quando objetos possuem estados importantes, como por exemplo pedidos em um sistema de vendas.

Esses diagramas ajudam a validar requisitos com stakeholders, pois tornam o comportamento do sistema mais claro.

---

### UML no projeto de software

Na fase de projeto, a UML passa a ser usada de forma mais **técnica e detalhada**.

Aqui o objetivo não é mais entender o problema, mas sim **definir como o sistema será construído**.

Alguns dos principais diagramas usados nessa fase incluem:

**Diagrama de Classes**

Define classes, atributos, métodos e relacionamentos.

**Diagrama de Sequência**

Mostra a interação entre objetos ao longo do tempo.

**Diagrama de Componentes**

Representa a organização modular do sistema.

**Diagrama de Implantação**

Mostra a distribuição do sistema em infraestrutura física.

---

### Resumo conceitual

A UML aparece em diferentes momentos do processo:

Elicitação
→ apoio visual para comunicação (principalmente casos de uso)

Análise de requisitos
→ modelagem do comportamento e organização das funcionalidades

Projeto de software
→ modelagem estrutural e técnica do sistema

Ou seja, a UML funciona como **ponte entre requisitos e implementação**.

---

