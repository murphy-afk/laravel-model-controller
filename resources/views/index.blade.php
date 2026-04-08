<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>
  <x-header>My Movies Laravel</x-header>
  <div class="container">
    <div class="row g-4 py-3 px-2">
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
  </div>
</body>
</html>