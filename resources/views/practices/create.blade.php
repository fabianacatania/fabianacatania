<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Nuova Pratica</title>
</head>
<body>
    <h1>Inserisci Nuova Pratica</h1>
    <form action="{{ route('practices.store') }}" method="POST">
        @csrf
        <div>
            <label for="numero_pratica">Numero Pratica:</label>
            <input type="text" id="numero_pratica" name="numero_pratica" required>
        </div>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="cognome">Cognome:</label>
            <input type="text" id="cognome" name="cognome" required>
        </div>
        <div>
            <label for="cuaa">CUAA:</label>
            <input type="text" id="cuaa" name="cuaa" required>
        </div>
        <button type="submit">Inserisci Pratica</button>
    </form>
</body>
</html>
