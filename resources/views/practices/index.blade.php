<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratiche Presentate</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Pratiche Presentate</h1>
        <a href="{{ route('practices.create') }}" class="btn btn-primary mb-3">Inserisci Nuova Pratica</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
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
                            <a href="{{ route('practices.show', $practice->id) }}" class="btn btn-info btn-sm">Visualizza</a>
                            <a href="{{ route('practices.edit', $practice->id) }}" class="btn btn-warning btn-sm">Modifica</a>
                            <form action="{{ route('practices.destroy', $practice->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
