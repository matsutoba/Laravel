<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>つぶやきアプリ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>つぶやきアプリ</h1>
    <p>{{ $name }}</p>
    <p>{{ $version }}</p>
    @foreach($tweets as $tweet)
      <p>{{ $tweet->content }}</p>
    @endforeach
  </body>
</html>