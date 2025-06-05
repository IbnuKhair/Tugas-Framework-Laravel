<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Selamat datang di toko Book Sales!</p>

    <ul>
    @foreach ($books as $item)
        <li>
            <strong>{{ $item->title }}</strong><br>
            {{ $item->description }}<br>
            Harga: Rp {{ number_format($item->price, 0, ',', '.') }}<br>
            Stok: {{ $item->stock }}
        </li>
    @endforeach
    </ul>
    
</body>
</html>