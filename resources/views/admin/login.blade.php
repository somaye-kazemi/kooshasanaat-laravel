<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- App styles -->
    <link rel="stylesheet" href="../css/admin.css" type="text/css">
</head>
<body>


<div class="login-form">


    <h5>ورود</h5>

    <!-- form -->
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="نام کاربری یا ایمیل" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="رمزعبور" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">مرا به خاطر بسپار</label>
            </div>
            <a href="recover-password.html">بازگردانی رمزعبور</a>
        </div>
        <button class="btn btn-primary btn-block">ورود</button>
        <hr>
        <p class="text-muted">اکانت ندارید?</p>
        <a href="register.html" class="btn btn-outline-light btn-sm">ثبت نام کنید!</a>
    </form>
    <!-- ./ form -->

</div>

</body>

</html>
