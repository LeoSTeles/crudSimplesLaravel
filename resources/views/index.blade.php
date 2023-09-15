<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('menu')
    <title>Lista de Candidatos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a.button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border-radius: 4px;
        }
        a.button:hover {
            background-color: #0056b3;
        }
        button.delete{
            display: inline-block;
            background-color: red;
            color: #fff;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Lista de Candidatos</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidatos as $candidato)
                <tr>
                    <td>{{ $candidato->nome }}</td>
                    <td>{{ $candidato->telefone }}</td>
                    <td>
                        <a href="/exibir/{{{$candidato->id}}}" class="button">Editar</a>
                        <form action="/delete/{{$candidato->id}}" method="POST" style="display:inline;">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="delete">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="/cadastro" class="button">Novo Candidato</a>
</body>
</html>
