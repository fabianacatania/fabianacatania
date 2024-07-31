<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Pratica</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Dettagli Pratica</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Numero Pratica:</strong> {{ $practice->numero_pratica }}</p>
                <p><strong>Nome:</strong> {{ $practice->nome }}</p>
                <p><strong>Cognome:</strong> {{ $practice->cognome }}</p>
                <p><strong>CUAA:</strong> {{ $practice->cuaa }}</p>
                <a href="{{ route('practices.index') }}" class="
