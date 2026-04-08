<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="container py-4 bg-light">
  <h1 class="mb-4 text-center fw-bold">Movies</h1>
  <div class="row g-4">
    @foreach ($movies as $movie)
      <div class="col-6 col-md-3">
        <x-card>
          <x-slot:title>{{ $movie['title'] }}</x-slot:title>
          <x-slot:originalTitle>{{ $movie['original_title'] }}</x-slot:originalTitle>
          <x-slot:nationality>{{ $movie['nationality'] }}</x-slot:nationality>
          <x-slot:releaseDate>{{ $movie['date'] }}</x-slot:releaseDate>
          <x-slot:vote>{{ $movie['vote'] }}</x-slot:vote>
        </x-card>
      </div>
    @endforeach
  </div>
</body>
</html>