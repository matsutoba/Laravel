<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>つぶやきアプリ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>つぶやきアプリ {{ $name }} {{ $version }}</h1>
    <hr>
    <div>
      <p>投稿フォーム</p>
      <form action="{{ route('tweet.create')}}" method="post">
        @csrf
        <label for="tweet-content">つぶやき</label>
        <span>140文字まで</span>
        <textarea name="tweet" id="tweet-content" cols="30" rows="10" placeholder="つぶやきを入力"></textarea>
        @error('tweet')
        <p style="color:red;">{{ $message }}</p>
        @enderror
        <button type="submit">投稿</button>
      </form>
    </div>
    <hr>
    @foreach($tweets as $tweet)
      <details>
        <summary>{{ $tweet->content }}</summary>
        <div>
          <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
        </div>
      </details>
    @endforeach
  </body>
</html>