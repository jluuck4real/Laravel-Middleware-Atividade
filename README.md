# **Portal Laravel — Controller e Middleware**

Projeto desenvolvido em **Laravel** como atividade prática sobre **Controllers, Middlewares e Views**.

## **📋 Sobre o Projeto**

A aplicação foi desenvolvida para demonstrar o funcionamento de um **Controller acionando um Middleware**, responsável por controlar o acesso do usuário e direcionar a aplicação para diferentes visualizações.

O projeto possui uma interface simples para demonstrar os dois possíveis resultados:

* **Acesso autorizado:** exibe a mensagem **"Bem vindo ao portal"**.
* **Acesso não autorizado:** exibe as mensagens **"Seu acesso não foi autorizado."** e **"Entrar em contato com o administrador."**

## **🎯 Objetivo**

O objetivo da atividade é aplicar na prática conceitos fundamentais do framework Laravel, principalmente:

* **Controllers**
* **Middlewares**
* **Rotas**
* **Views com Blade**
* **Organização da estrutura de um projeto Laravel**

## **⚙️ Tecnologias Utilizadas**

* **PHP**
* **Laravel 12**
* **Blade**
* **HTML5**
* **CSS3**
* **Git**
* **GitHub**

## **📁 Estrutura Principal**

```text
portal-laravel/
│
├── app/
│   └── Http/
│       ├── Controllers/
│       │   └── PortalController.php
│       │
│       └── Middleware/
│           └── AcessoMiddleware.php
│
├── resources/
│   └── views/
│       ├── inicio.blade.php
│       ├── autorizado.blade.php
│       └── nao-autorizado.blade.php
│
├── routes/
│   └── web.php
│
├── .gitignore
├── artisan
├── composer.json
└── README.md
```

## **🔄 Funcionamento**

O fluxo principal da aplicação funciona da seguinte maneira:

```text
Usuário
   ↓
Tela inicial
   ↓
Controller
   ↓
Middleware
   ↓
Verificação de acesso
   ↓
┌───────────────────┬────────────────────┐
│                   │                    │
▼                   ▼                    │
Autorizado          Não autorizado       │
│                   │                    │
▼                   ▼                    │
View autorizada     View de acesso       │
                    não autorizado       │
```

## **🖥️ Telas do Projeto**

### **Tela Inicial**

A tela inicial apresenta as opções para acessar o portal ou testar o acesso não autorizado.

### **Acesso Autorizado**

Ao acessar o portal, a aplicação apresenta:

> **Bem vindo ao portal**

Também é apresentada uma mensagem informando que o acesso foi autorizado.

### **Acesso Não Autorizado**

Ao testar o bloqueio, o Middleware intercepta a requisição e apresenta:

> **Seu acesso não foi autorizado.**

> **Entrar em contato com o administrador.**

## **🚀 Como Executar o Projeto**

### **Pré-requisitos**

É necessário ter instalado:

* **PHP**
* **Composer**
* **Laravel**
* **Git**

### **Instalação**

Clone o repositório:

```bash
git clone URL_DO_REPOSITORIO
```

Entre na pasta do projeto:

```bash
cd portal-laravel
```

Instale as dependências:

```bash
composer install
```

Inicie o servidor Laravel:

```bash
php artisan serve
```

Depois, acesse no navegador:

```text
http://127.0.0.1:8000
```

## **📚 Atividade**

**Disciplina:** Framework Laravel

**Tema:** Middlewares e Model

**Objetivo da atividade:** Criar uma aplicação utilizando Laravel onde o Controller aciona um Middleware responsável pelo controle de acesso e pela apresentação das mensagens na View.

## **👨‍💻 Desenvolvedor**

**João Lucas**

Projeto desenvolvido para fins **acadêmicos e educacionais**.

---

# **📸 Prints do Projeto**

> **Espaço destinado às capturas de tela da aplicação.**

## **Print 1 — Tela Inicial**

<img width="862" height="615" alt="image" src="https://github.com/user-attachments/assets/40b5670b-1e96-4a3a-aa88-d670542f2230" />


## **Print 2 — Acesso Autorizado**

<img width="762" height="532" alt="image" src="https://github.com/user-attachments/assets/5da672ec-363c-4247-939d-387206fc27aa" />


## **Print 3 — Acesso Não Autorizado**

<img width="727" height="545" alt="image" src="https://github.com/user-attachments/assets/a48d2b1c-0483-43fb-a079-19e80c885094" />


**README desenvolvido para documentação da atividade de Laravel.**
