<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Pratica</title>
</head>
<body>
    <h1>Dettagli Pratica</h1>
    <p><strong>Numero Pratica:</strong> {{ $practice->numero_pratica }}</p>
    <p><strong>Nome:</strong> {{ $practice->nome }}</p>
    <p><strong>Cognome:</strong> {{ $practice->cognome }}</p>
    <p><strong>CUAA:</strong> {{ $practice->cuaa }}</p>
    <a href="{{ route('practices.index') }}">Torna alla lista</a>
</body>
</html>
