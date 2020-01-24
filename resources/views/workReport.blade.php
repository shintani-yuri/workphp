<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Hello</title>
</head>
<body>
    @inject('greet', 'App\Sample\Greeting')
    <p>{{ $greet->getGreeting() }}</p>
</body>
</html>