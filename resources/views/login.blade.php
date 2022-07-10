<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/login.css">
    <link href="/css/index.css" rel="stylesheet">
</head>

<body style="margin: 0;">
    <header class="header__box">
        <article class="header__logo">
            <div><a class="header__logo__font" href="/login">Atte</a></div>
        </article>
    </header>
    <main style="margin: 0;" class="main1__box">
        <p class="main1__font1">
            ロ グ イ ン
            <!-- ユーザーはログインした人の名前にする -->
        </p>
        </p>
        <form action="/login" method="post">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p class="main1__login-email">
                <input type="email" name="email01" size="40" maxlength="100" placeholder="メールアドレス"
                    class="main1__login-email__font">
            </p>
            <p class="main1__login-password">
                <input type="text" name="text01" size="40" maxlength="100" placeholder="パスワード"
                    class="main1__login-password__font">
                <input type="submit" value="ログイン" class="main1__login-bottan">
            </p>
        </form>
        <p class="main1__user-post">
            アカウントをお持ちでない方はこちらから
            <!-- /rest/end -->
            <br><a class="" href="/register">会員登録</a> <!-- /rest/end -->
        </p>
    </main>
    <footer class="fotter__font">
        <div><small>&copy;Atte,inc.</small></div>
    </footer>
</body>

</html>
