O **Diagrama de Atividades (Activity Diagram)** é um diagrama da **UML (Unified Modeling Language)** utilizado para representar o **fluxo de atividades, ações e decisões de um processo ou caso de uso**. Ele mostra **o que acontece e em qual sequência**, incluindo condições, paralelismo e encerramento.

É muito usado para modelar:

* Fluxo de execução de um sistema;
* Regras de negócio;
* Processos organizacionais;
* Casos de uso mais complexos.

Elementos principais:

| Elemento       | Símbolo                           | Função                          |
| -------------- | --------------------------------- | ------------------------------- |
| Nó inicial     | ●                                 | Indica o início do fluxo        |
| Atividade/Ação | Retângulo com cantos arredondados | Representa uma tarefa executada |
| Fluxo          | →                                 | Indica sequência                |
| Decisão        | ◇                                 | Escolha baseada em condição     |
| Fork           | Barra grossa                      | Divide execução paralela        |
| Join           | Barra grossa                      | Sincroniza fluxos paralelos     |
| Nó final       | ◎                                 | Finaliza o processo             |

<!--
Exemplo simples — **Login no sistema**:

```text
●
↓
[Informar usuário e senha]
↓
◇ Credenciais válidas?
├── Sim → [Acessar sistema] → ◎
└── Não → [Exibir erro] → ◎
```

Exemplo em notação próxima da UML:

```text
●
↓
(Abrir aplicação)
↓
(Realizar login)
↓
◇ Login válido?
├── [Sim]
│      ↓
│ (Entrar no sistema)
│      ↓
│ ◎
└── [Não]
       ↓
 (Mostrar mensagem)
       ↓
 ◎
```
-->

**Diferença para outros diagramas UML:**

* **Caso de Uso** → mostra *quem faz o quê*.
* **Sequência** → mostra *troca de mensagens entre objetos*.
* **Atividades** → mostra *o fluxo do processo*.
* **Objetos** → mostra *estado dos objetos em um instante*.

Em trabalhos de Engenharia de Software, normalmente o diagrama de atividades costuma ser produzido **após a definição dos casos de uso**, pois detalha o comportamento do processo descrito neles.

[Video - Diagrama de Atividade](https://www.youtube.com/watch?v=NYUJRhUPUzc&list=PLMI4h2donpGzo6CrHIskPWGPaMX4NM_Qp)

<br><br>[Baixar todo o material da aula](https://download-directory.github.io/?url=http://github.com/IgorAvilaPereira/engenharia_software2026/tree/main/14_uml_diagrama_atividades_diagrama_sequencia) <br><br>
&nbsp;
