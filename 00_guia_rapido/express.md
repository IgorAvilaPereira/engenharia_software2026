# Express

Para instalar o **Express.js** (mini-framework para criar APIs no **Node.js**), siga estes passos básicos.

---

# 1. Instalar o Node.js

Primeiro você precisa do Node instalado.

No Linux (Ubuntu/Debian):

```bash
sudo apt install nodejs npm
```

Verifique se instalou:

```bash
node -v
npm -v
```

---

# 2. Criar um projeto Node

Crie uma pasta para o projeto.

```bash
mkdir meu-servidor
cd meu-servidor
```

Inicialize o projeto:

```bash
npm init -y
```

Isso cria o arquivo:

```
package.json
```

---

# 3. Instalar o Express

Agora instale o framework:

```bash
npm install express
```

O npm irá baixar o **Express** e criar a pasta:

```
node_modules
```

---

# 4. Criar o servidor

Crie um arquivo chamado:

```
server.js
```

Conteúdo:

```javascript
const express = require("express");

const app = express();

app.get("/", (req, res) => {
    res.send("Servidor funcionando!");
});

app.listen(3000, () => {
    console.log("Servidor rodando em http://localhost:3000");
});
```

Ex (2):


```javascript
const express = require('express');
const app = express();

app.get('/api/usuarios', (req, res) => {
    res.json([
        { nome: "Ana" },
        { nome: "Carlos" }
    ]);
});

app.listen(3000, () => {
    console.log("Servidor rodando na porta 3000");
});
```

Ex. Front-end js vanilla:
```javascript
<button id="btn">Buscar dados</button>
<div id="resultado"></div>

<script>
document.getElementById("btn").addEventListener("click", async () => {
    const resposta = await fetch("/api/usuarios");
    const dados = await resposta.json();
    document.getElementById("resultado").innerText = JSON.stringify(dados);
});
</script>
```

---

# 5. Executar o servidor

```bash
node server.js
```

Abra no navegador:

```
http://localhost:3000
```

Resultado:

```
Servidor funcionando!
```

---

# 6. Estrutura mínima de projeto

```
meu-servidor/
│
├── node_modules/
├── package.json
├── package-lock.json
└── server.js
```

---

✅ **Resumo dos comandos**

```bash
mkdir meu-servidor
cd meu-servidor
npm init -y
npm install express
node server.js
```

---

## Estrutura recomendada (Express + HTML + JS vanilla)

```
meu-servidor/
│
├── node_modules/
├── package.json
├── package-lock.json
├── server.js
│
├── public/
│   ├── index.html
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
│
└── routes/
    └── usuarios.js
```

### Onde ficam os HTMLs?

👉 **Dentro da pasta `public`**

Exemplo:

```
public/index.html
```

## Configurar o Express para servir HTML

No `server.js` você precisa liberar a pasta `public`:

```javascript
const express = require("express");
const app = express();

app.use(express.static("public"));

app.listen(3000, () => {
    console.log("Servidor rodando em http://localhost:3000");
});
```

Agora:

```
http://localhost:3000
```

abre automaticamente:

```
public/index.html
```

## Exemplo de `index.html`

```html
<!DOCTYPE html>
<html>
<head>
    <title>Exemplo Express</title>
</head>
<body>

<button id="btn">Buscar dados</button>
<div id="resultado"></div>

<script src="js/script.js"></script>

</body>
</html>
```

## Exemplo `public/js/script.js`

```javascript
document.getElementById("btn").addEventListener("click", async () => {

    const resposta = await fetch("/api/usuarios");
    const dados = await resposta.json();

    document.getElementById("resultado").innerText =
        JSON.stringify(dados);
});
```

## API no `server.js`

```javascript
app.get("/api/usuarios", (req, res) => {
    res.json([
        { nome: "Ana" },
        { nome: "Carlos" }
    ]);
});
```

---

✅ **Resumo da lógica**

* **Express (Node)** → backend / API
* **public/** → HTML + CSS + JS
* **fetch()** → JS do navegador chama API

---


