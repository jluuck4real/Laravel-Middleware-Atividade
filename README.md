# Portal Laravel — controller e middleware

Atividade acadêmica sobre rotas, controllers, interceptação de requisições e views Blade. O controller aplica o middleware somente à ação `painel`.

**PHP · Laravel 12 · Blade · HTML · CSS**

## Comportamento atual

- `/` apresenta a tela inicial.
- `/painel` passa por `AcessoMiddleware`.
- O código atual fixa `$permissao = false`: a resposta ao painel é a view de acesso não autorizado, com HTTP 403.
- A view autorizada está no projeto, mas não é alcançada por essa configuração. É uma demonstração didática; não representa autenticação completa ou permissões persistidas.

## Instalação

Requer Git, PHP 8.2+ e Composer.

```sh
git clone https://github.com/jluuck4real/Laravel-Middleware-Atividade.git
cd Laravel-Middleware-Atividade
composer install
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate
```

Para esta demonstração, configure `SESSION_DRIVER=file` e `CACHE_STORE=file` no `.env` local, evitando a dependência das tabelas de sessão e cache. Confirme que `storage/` e `bootstrap/cache/` permitem escrita.

```sh
php artisan config:clear
php artisan serve
```

Abra o endereço informado no terminal e navegue para `/painel` para observar o bloqueio.

## Estrutura

```text
app/Http/Controllers/PortalController.php   Ações e vínculo do middleware
app/Http/Middleware/AcessoMiddleware.php    Verificação didática
resources/views/                           Telas inicial e resultados
routes/web.php                             Rotas / e /painel
```

## Capturas da atividade

![Captura 1 do projeto](https://github.com/user-attachments/assets/40b5670b-1e96-4a3a-aa88-d670542f2230)

![Captura 2 do projeto](https://github.com/user-attachments/assets/5da672ec-363c-4247-939d-387206fc27aa)

![Captura 3 do projeto](https://github.com/user-attachments/assets/a48d2b1c-0483-43fb-a079-19e80c885094)

As capturas registram a atividade original, incluindo a view autorizada; não alteram o comportamento atual descrito acima. Não há deploy público confirmado.

**Autor:** João Lucas Gomes Mendonça · **Tema:** Middleware e Model, disciplina de Framework Laravel.
