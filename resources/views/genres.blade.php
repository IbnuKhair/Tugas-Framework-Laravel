<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Book Genres</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Ini adalah halaman genre buku</p>

    <ul>
        @foreach ($genres as $genre)
            <li>
                <strong>{{ $genre->name }}</strong><br>
                {{ $genre->description }}
            </li>
        @endforeach
    </ul>
</body>
</html>