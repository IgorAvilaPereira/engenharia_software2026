# Diagrama de Caso de Uso

O **Diagrama de Caso de Uso** é um tipo de diagrama da **UML (Unified Modeling Language)** usado na **Engenharia de Software** para **representar as funcionalidades de um sistema e as 
interações com seus usuários (atores)**.

Ele mostra **o que o sistema faz**, do ponto de vista do usuário, **sem mostrar detalhes de implementação**.

---

# Elementos de um Diagrama de Caso de Uso
Em **diagramas de caso de uso** da **UML**, utilizados na **Engenharia de Software**, existem alguns **elementos principais** que representam os participantes do sistema, suas funcionalidades e os relacionamentos entre eles.

---

## 1. Ator

O **ator** representa **quem interage com o sistema**.

Pode ser:

* um usuário (pessoa)
* outro sistema
* um dispositivo externo

Representação: **boneco (stickman)**.

Exemplos:

* Cliente
* Administrador
* Sistema de pagamento

---

## 2. Caso de uso

O **caso de uso** representa **uma funcionalidade do sistema**.

É desenhado como **uma elipse (oval)**.

Exemplos:

* Fazer login
* Realizar pedido
* Consultar notas
* Gerar relatório

---

## 3. Limite do sistema (System Boundary)

Representa **a fronteira do sistema**, mostrando o que faz parte dele e o que está fora.

É desenhado como **um retângulo envolvendo os casos de uso**.

Dentro do retângulo:

* funcionalidades do sistema

Fora do retângulo:

* atores

---

# Relacionamentos no Diagrama

## 4. Associação

Ligação entre **ator e caso de uso**, indicando interação.

Exemplo:

```
Cliente ----- (Realizar compra)
```

---

## 5. Include (<<include>>)

Indica que **um caso de uso sempre inclui outro**.

É usado para **reutilizar funcionalidades comuns**.

Exemplo:

```
Realizar compra
      |
   <<include>>
      |
Autenticar usuário
```

---

## 6. Extend (<<extend>>)

Indica **comportamento opcional ou adicional**.

Exemplo:

```
Realizar compra
      |
   <<extend>>
      |
Aplicar cupom
```

---

## 7. Generalização

Representa **herança entre atores ou entre casos de uso**.

Exemplo:

```
Administrador
      ▲
      |
Funcionário
```

Isso indica que **Funcionário herda comportamentos do Administrador**.

---

# Resumo dos elementos

| Elemento          | Representa                    |
| ----------------- | ----------------------------- |
| Ator              | quem usa o sistema            |
| Caso de uso       | funcionalidade do sistema     |
| Limite do sistema | fronteira do sistema          |
| Associação        | interação ator–caso de uso    |
| Include           | reutilização obrigatória      |
| Extend            | comportamento opcional        |
| Generalização     | herança entre atores ou casos |

---

✅ **Em resumo**, um diagrama de caso de uso mostra:

* **quem usa o sistema (atores)**
* **o que o sistema faz (casos de uso)**
* **como essas interações acontecem (relacionamentos)**

---

# Para que serve o diagrama de caso de uso?

Ele é usado para:

✔ entender **funcionalidades do sistema**
✔ identificar **atores envolvidos**
✔ ajudar na **definição de requisitos funcionais**
✔ facilitar a comunicação entre **clientes e desenvolvedores**

---

# Quando ele é usado no processo?

Normalmente aparece na fase de **análise de requisitos** dentro da **Especificação de Requisitos de Software (ERS)**.

Fluxo típico:

1. Elicitação de requisitos
2. Análise dos requisitos
3. **Diagramas de caso de uso**
4. Especificação dos requisitos
5. Projeto do sistema

---

✅ **Resumo**

O **Diagrama de Caso de Uso** mostra:

* **quem usa o sistema (atores)**
* **quais funcionalidades existem (casos de uso)**
* **como ocorre a interação com o sistema**

Ex:

![](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjbdae0HkNd5qtDR1HK7w6fTOtSbn6spHmIPbHjuWKrTn9sz_nRbz0iZ-qlVGmKUU4Vtk7uqxKZKAVrbo8A8WPSlDZJBvwg8VAFagA_s4cQHSyv3BJWUtOrjMG_xacChF-piPKlGU1W-Z8/s1600/ASSOCIACAO+caso+de+uso+07.jpg)
