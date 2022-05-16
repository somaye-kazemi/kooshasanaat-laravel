<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!--css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>

    <!--css-->
</head>
<body>
@include('layouts.header')

@include('layouts.banner')

<!--contact-->
<section class="contact">
    <div class="container">
        <div class="contact-t">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2>راه های ارتباط با ما</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-map"></i><br>
                        <strong>تلفن تماس</strong><br>
                        <span>0912 000 0000</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-inbox"></i><br>
                        <strong>ایمیل</strong><br>
                        <span>name@example.com</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-map-pin"></i><br>
                        <strong>آدرس </strong><br>
                        <span>قزوین، شهر صنعتی البرز</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact-->

<!--form-->
<section class="form">
    <div class="container">
        <div class="form-t">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-title">
                        <h3>ارسال پیام :</h3>
                    </div>
                </div>
            </div>
            <div class="form-box">
                <div class="row">
                    <div class="col-md-6">
                        <div class=" g-3">
                            <input type="text" class="form-control" placeholder="نام"
                                   aria-label="نام">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput"
                                   placeholder="name@example.com">
                        </div>
                    </div>
                </div>
                <div class="form-box-info">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating text-right">
                                <label for="floatingTextarea2">توضیحات</label>
                                <textarea class="form-control" placeholder="توضیحات" id="floatingTextarea2"
                                          style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-box-btn">
                    <div class="col-md-12">
                        <button type="button" class="btn w-100">خدمات ما</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--form-->


@include('layouts.footer')

<!-- Optional JavaScript -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
