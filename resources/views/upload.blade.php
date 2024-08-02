<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
</head>
<body>
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="document">Select a document:</label>
        <input type="file" id="document" name="document">
        <button type="submit">Upload</button>
    </form>

    @if (session('success'))
        <p>{{ session('success') }}</p>
        @if (session('file'))
            <p>File uploaded: <a href="{{ Storage::url(session('file')) }}" target="_blank">View Document</a></p>
        @endif
    @elseif ($errors->any())
        <p>{{ $errors->first() }}</p>
    @endif
</body>
</html>
