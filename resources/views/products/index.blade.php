<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>
</head>
<body>
    <h1>Anime</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Release Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products['anime'] as $product)
                <tr>
                    <td>{{ $product['title'] }}</td>
                    <td>{{ $product['genre'] }}</td>
                    <td>{{ $product['release_year'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
