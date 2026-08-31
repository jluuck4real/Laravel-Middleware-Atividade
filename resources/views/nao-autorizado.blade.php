<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso negado</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f5f7;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .alerta {
            width: 90%;
            max-width: 560px;
            padding: 40px;
            background: white;
            border-left: 6px solid #dc3545;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,.08);
            text-align: center;
        }
        h1 { color: #dc3545; margin-top: 0; }
        p { color: #555; line-height: 1.6; }
        .voltar {
            display: inline-block;
            margin-top: 18px;
            padding: 11px 22px;
            background: #343a40;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main class="alerta">
        <h1>Acesso bloqueado</h1>
        <p>{{ $mensagem }}</p>
        <p>{{ $orientacao }}</p>
        <a class="voltar" href="{{ route('inicio') }}">Retornar</a>
    </main>
</body>
</html>
