<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        *{
            top: 0px;
            padding: 0px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        nav {
            background-color: #343a40; /* Cor de fundo do menu */
            padding: 10px;
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 10px;
            text-decoration: none;
            font-size: 16px;
            color: #ffffff; /* Cor do texto do link */
            padding: 8px 16px; /* Espaçamento interno do link */
            border-radius: 4px; /* Cantos arredondados */
            transition: background-color 0.3s, color 0.3s; /* Transição de cores */
        }
        nav a:hover {
            background-color: #007bff; /* Cor de fundo quando o mouse passar por cima */
            color: #ffffff; /* Cor do texto quando o mouse passar por cima */
            text-decoration: none; /* Remover sublinhado */
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Início</a>
        <!-- Adicione outras opções de menu aqui conforme necessário -->
    </nav>
    @yield('content')
</body>
</html>
