<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/register.css">
    <link href="/css/reset.css" rel="stylesheet">
</head>

<body style="margin: 0;">

    <header class="header__box">
        <article class="header__logo">
            <div><a class="header__logo__font" href="/login">Atte</a></div>
        </article>
    </header>
    <main style="margin: 0;" class="main1__box">
        <p class="main1__font1">
            会 員 登 録
            <!-- ユーザーはログインした人の名前にする -->
        </p>
        <form action="/register" method="post">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p class="main1__login-name">
                <label for="name">名前：</label>
                <input type="text" name="name" size="40" maxlength="100" class="main1__login-name__font">
            </p>
            <p class="main1__login-email">
                <label for="email">メールアドレス：</label>
                <input type="email" name="email" size="40" maxlength="100" class="main1__login-email__font">
            </p>
            <p class="main1__login-password">
                <label for="password">パスワード：</label>
                <input type="text" name="password" size="40" maxlength="100" class="main1__login-password__font">
            </p>
            <p class="main1__login-repassword">
                <label for="remember_token">確認用パスワード：</label>
                <input type="text" name="remember_token" size="40" maxlength="100"
                    class="main1__login-repassword__font">
            </p>
            <a href="/login"><input type="submit" value="会員登録" class="main1__login-bottan"></a>

        </form>
        <p class="main1__user-post">
            アカウントをお持ちの方はこちらから
            <!-- /rest/end -->
            <br><a class="" href="/login">ログイン</a> <!-- /rest/end -->
        </p>
    </main>
    <footer class="fotter__font">
        <div><small>&copy;Atte,inc.</small></div>
    </footer>
</body>

</html>
