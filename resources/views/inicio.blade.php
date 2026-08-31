<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef1f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            width: 90%;
            max-width: 520px;
            padding: 42px;
            background: #fff;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 8px 24px rgba(0,0,0,.08);
        }
        h1 { margin: 0 0 12px; color: #20252b; }
        p { color: #626a73; margin-bottom: 28px; }
        .botao {
            display: inline-block;
            padding: 13px 24px;
            border-radius: 9px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .botao:hover { opacity: .88; }
    </style>
</head>
<body>
    <main class="card">
        <h1>Área do Portal</h1>
        <p>Esta página possui um acesso protegido por Middleware.</p>
        <a class="botao" href="{{ route('painel') }}">Entrar na área restrita</a>
    </main>
</body>
</html>
