<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Pratica</title>
</head>
<body>
    <h1>Modifica Pratica</h1>
    <form action="{{ route('practices.update', $practice->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="numero_pratica">Numero Pratica:</label>
            <input type="text" id="numero_pratica" name="numero_pratica" value="{{ $practice->numero_pratica }}" required>
        </div>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $practice->nome }}" required>
        </div>
        <div>
            <label for="cognome">Cognome:</label>
            <input type="text" id="cognome" name="cognome" value="{{ $practice->cognome }}" required>
        </div>
        <div>
            <label for="cuaa">CUAA:</label>
            <input type="text" id="cuaa" name="cuaa" value="{{ $practice->cuaa }}" required>
        </div>
        <button type="submit">Aggiorna Pratica</button>
    </form>
</body>
</html>
