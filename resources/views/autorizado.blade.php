<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel autorizado</title>
    <style>
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
            background: white;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 8px 24px rgba(0,0,0,.08);
        }
        h1 { color: #198754; }
        p { color: #555; }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            border-radius: 9px;
            background: #198754;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main class="card">
        <h1>Acesso autorizado</h1>
        <p>O usuário possui permissão para visualizar esta área.</p>
        <a href="{{ route('inicio') }}">Voltar ao início</a>
    </main>
</body>
</html>
