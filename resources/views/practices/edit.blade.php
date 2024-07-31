<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Pratica</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Modifica Pratica</h1>
        <form action="{{ route('practices.update', $practice->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="numero_pratica">Numero Pratica:</label>
                <input type="text" id="numero_pratica" name="numero_pratica" class="form-control" value="{{ $practice->numero_pratica }}" required>
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ $practice->nome }}" required>
            </div>
            <div class="form-group">
                <label for="cognome">Cognome:</label>
                <input type="text" id="cognome" name="cognome" class="form-control" value="{{ $practice->cognome }}" required>
            </div>
            <div class="form-group">
                <label for="cuaa">CUAA:</label>
                <input type="text" id="cuaa" name="cuaa" class="form-control" value="{{ $practice->cuaa }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna Pratica</button>
        </form>
    </div>
</body>
</html>
