<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>
    <div class="login-container">
        <h2>ログイン</h2>

        <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <label>メールアドレス</label>
            <input type="email" name="email" required>

            <label>パスワード</label>
            <input type="password" name="password" required>

            <button type="submit" class="btn-login">ログインする</button>
        </form>

        <p><a href="{{ route('register') }}">会員登録はこちら</a></p>
    </div>
</body>

</html>