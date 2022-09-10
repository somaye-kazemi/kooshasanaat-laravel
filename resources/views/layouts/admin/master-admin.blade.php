<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>panel admin</title>
    <!--css-->
    <link href={{asset("css/app.css")}} rel="stylesheet">

    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>

    <!--css-->

</head>
<body>

<section class="fullscreen">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
@include("layouts.admin.sidbar")
            </div>
            <div class="col-md-9">
@yield("main")

            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<script src="../../public/admin_/js/jquery-2.1.4.min.js"></script>
<script src="../../public/admin_/js/bootstrap.min.js"></script>
<script src="../../public/admin_/js/owl.carousel.min.js"></script>
<script src="../../public/admin_/css/bootstrap.bundle.min.js"></script>
<script src="../../public/admin_/js/script.js"></script>


</body>
</html>
