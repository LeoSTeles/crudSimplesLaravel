<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('menu')
    <title>Editar Candidato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            font-size: 14px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 8px 12px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Editar Candidato</h1>
    <form action="/atualizar/{{$candidato->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $candidato->nome }}">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="{{ $candidato->telefone }}">
        <button type="submit">Atualizar Candidato</button>
    </form>
</body>
</html>
