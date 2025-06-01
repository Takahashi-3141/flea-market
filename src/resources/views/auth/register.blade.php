<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>
    <header class="header">
        <img src="{{ asset('images/logo.png') }}" alt="COACHTECH" class="logo">
    </header>

    <main class="register-container">
        <h2>会員登録</h2>
        <form action="{{ route('register.process') }}" method="POST">
            @csrf
            <label>ユーザー名</label>
            <input type="text" name="name" required>

            <label>メールアドレス</label>
            <input type="email" name="email" required>

            <label>パスワード</label>
            <input type="password" name="password" required>

            <label>確認用パスワード</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit" class="btn-register">登録する</button>
        </form>

        <p class="login-link">
            <a href="{{ route('login') }}">ログインはこちら</a>
        </p>
    </main>
</body>

</html>