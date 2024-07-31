<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratiche Presentate</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Pratiche Presentate</h1>
    <a href="{{ route('practices.create') }}">Inserisci Nuova Pratica</a>
    <table>
        <thead>
            <tr>
                <th>Numero Pratica</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>CUAA</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($practices as $practice)
                <tr>
                    <td>{{ $practice->numero_pratica }}</td>
                    <td>{{ $practice->nome }}</td>
                    <td>{{ $practice->cognome }}</td>
                    <td>{{ $practice->cuaa }}</td>
                    <td>
                        <a href="{{ route('practices.show', $practice->id) }}">Visualizza</a>
                        <a href="{{ route('practices.edit', $practice->id) }}">Modifica</a>
                        <form action="{{ route('practices.destroy', $practice->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
