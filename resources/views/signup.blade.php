<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>بورداش - قالب داشبرد ادمین</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="assets/media/image/logo-F.png" alt="image">
        <img class="logo-dark" src="assets/media/image/logo-dark.html" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>ساخت اکانت</h5>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    @endif
    <!-- form -->
    <form action="/signup" method="post">
        @csrf
        <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="نام" required autofocus>
        </div>

        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="ایمیل " required>
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="رمزعبور" required>
        </div>
        <button class="btn btn-primary btn-block">ثبت‌نام</button>
        <hr>
        <p class="text-muted">اکانت دارید?</p>
        <a href="login.blade.php" class="btn btn-outline-light btn-sm">ثبت نام!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>

</html>
