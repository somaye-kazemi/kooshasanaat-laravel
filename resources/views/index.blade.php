<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!--css-->

    <link href="../css/app.css" rel="stylesheet">
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>

    <!--css-->
</head>
<body>


@extends("layouts.master")


@section("main")

<!--slider-->

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/bg1.jpg" alt="Los Angeles" width="1100">
            <div class="container">
                <div class="box-slider-tex">
                    <h3>وقتی خدمات مهم است</h3>
                    <h4>انتخاب برای شما ساده است</h4>
                    <p>شما اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل میکنیم.</p>
                    <div class="slider-box-btn">
                        <button type="button" class="btn">خدمات ما</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/bg2.jpg" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="/images/bg3.jpg" alt="New York" width="1100" height="500">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>

<!--slider-->

<!--request-->
<section class="request">
    <div class="container">
        <div class="request-t">
            <div class="row">
                <div class="col-md-4 text-center text-md-right  ">
                    <div class="request-btn">
                        <button type="button" class="btn">درباره ما</button>
                    </div>
                </div>
                <div class="col-md-8  text-center text-md-left">
                    <div class="request-text">
                        <span>ما نیاز های شما را از آنچه میخواهید به خوبی درک میکنیم</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--request-->

<!--know-->
<section class="know">
    <div class="container">
        <div class="know-t">
            <div class="row">
                <div class="col-md-4">
                    <div class="know-box">
                        <div class="know-box-img">
                            <img src="/images/know.png" alt="" title="">
                        </div>
                        <div class="container">
                            <div class="know-box-text">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="know-box-t">
                                            <h3>درباره ما چه میدانید</h3>
                                            <p>شما اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل میکنیم .شما
                                                اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل میکنیم.</p>
                                            <p id="p1">شما اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل
                                                میکنیم .شما
                                                اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل میکنیم.</p>
                                            <button type="button" class="btn btn-light"
                                                    onclick='document.getElementById("p1").style.display="block"'
                                            >
                                                بیشتر بدانید
                                            </button>

                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="know-box-img-t">
                                            <img src="/images/icons8-bookmark.gif" alt="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="know-box">
                        <div class="know-box-img">
                            <img src="/images/know.png" alt="" title="">
                        </div>
                        <div class="container">
                            <div class="know-box-text">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="know-box-t">
                                            <h3>درباره ما چه میدانید</h3>
                                            <p>شما اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل میکنیم .شما
                                                اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل میکنیم.</p>
                                            <button type="button" class="btn btn-light">بیشتر بدانید</button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="know-box-img-t">
                                            <img src="/images/icons8-bookmark.gif" alt="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="know-box">
                        <div class="know-box-img">
                            <img src="/images/know.png" alt="" title="">
                        </div>
                        <div class="container">
                            <div class="know-box-text">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="know-box-t">
                                            <h3>درباره ما چه میدانید</h3>
                                            <p>شما اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل میکنیم .شما
                                                اهداف و ایده هایی دارید، ما اهداف شما را به واقعیت تبدیل میکنیم.</p>
                                            <button type="button" class="btn btn-light">بیشتر بدانید</button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="know-box-img-t ">
                                            <img src="/images/icons8-bookmark.gif" alt="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!--know-->

<!--fact-->
<section class="fact">
    <div class="container">
        <div class="fact-t">
            <div class="row">
                <div class="col-md-3 col-sm-6 mt-4">
                    <div class="fact-box">
                        <div class="fact-box-img">
                            <img src="/images/fact1.png" alt="" title="">
                        </div>
                        <div class="counter">
                            <h3><span id="count1" class="display-4"></span></h3>
                        </div>
                        <div class="fact-box-t">
                            <h4>TOTAL PROJECTS</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-4">
                    <div class="fact-box">
                        <div class="fact-box-img">
                            <img src="/images/fact2.png" alt="" title="">
                        </div>
                        <div class="counter">
                            <h3><span id="count2" class="display-4"></span></h3>
                        </div>
                        <div class="fact-box-t">
                            <h4>TOTAL PROJECTS</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-4">
                    <div class="fact-box">
                        <div class="fact-box-img">
                            <img src="/images/fact3.png" alt="" title="">
                        </div>
                        <div class="counter">
                            <h3><span id="count3" class="display-4"></span></h3>
                        </div>
                        <div class="fact-box-t">
                            <h4>TOTAL PROJECTS</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-4">
                    <div class="fact-box">
                        <div class="fact-box-img">
                            <img src="/images/fact4.png" alt="" title="">
                        </div>
                        <div class="counter">
                            <h3><span id="count4" class="display-4"></span></h3>
                        </div>
                        <div class="fact-box-t">
                            <h4>TOTAL PROJECTS</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--fact-->

<!--service-->
<section class="service">
    <div class="container">
        <div class="serv">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="serv-titer">
                        <h3>ما در انچه انجام میدهیم</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="serv-titer-t">
                        <h4>متخصص هستیم</h4>
                    </div>
                </div>
            </div>
            <div class="serv-t">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        @for( $i=0; $i<sizeof($services)/2; $i++)
                            <div class="serv-box">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="serv-box-img">
                                            <img src="/images/{{$services[$i]->image}}" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="serv-box-info">
                                            <h3> {{ $services[$i]->title}} </h3>
                                            <p>
                                                {{$services[$i]->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="col-md-4 text-center col-lg-4">
                        <div class="serv-box-img-main">
                            <img src="/images/service-center.jpg" alt="" title="">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        @for( $i=3; $i<sizeof($services); $i++)
                            <div class="serv-box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="serv-box-img">
                                            <img src="/images/{{$services[$i]->image}}" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="serv-box-info">
                                            <h3> {{ $services[$i]->title}} </h3>
                                            <p>
                                                {{$services[$i]->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--service-->

<!--project-->
<section class="project">
    <div class="container">
        <div class="project-t">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-title">
                        <h2>پروژه های اخیر</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-title-t">
                        <h4>نمونه پروژه ها</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="project-view">
                        <div class="container">
                            <ul class="tabs">
                                <li class="tab-link current" data-tab="tab-1">نمایش همه</li>
                                <li class="tab-link" data-tab="tab-2">پروژه های داخلی</li>
                                <li class="tab-link" data-tab="tab-3">پروژه های خارجی</li>
                            </ul>

                            <div id="tab-1" class="tab-content current">
                                <div class="project-view-box">
                                    <div class="row">
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project1.jpg" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project2.jpg" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project3.jpg" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project4.jpg" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project5.jpg" alt="" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-content">
                                <div class="project-view-box">
                                    <div class="row">
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project1.jpg" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project2.jpg" alt="" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-content">
                                <div class="project-view-box">
                                    <div class="row">
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project3.jpg" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/images/project4.jpg" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 prl">
                                            <div class="project-view-box-img">
                                                <img src="/project5.jpg" alt="" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-btn">
                        <a href="#">دیدن همه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--project-->

<!--license-->
<section class="license">
    <div class="container">
        <div class="license-t">
            <div class="row">
                <div class="col-md-6">
                    <div class="license-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="license-box-title">
                                    <h2>مشتریان ما</h2>
                                </div>
                            </div>
                        </div>
                        <div class="license-box-imaes">
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="license-box-img">
                                        <img src="/images/client1.png" alt="" title="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="license-box-img">
                                        <img src="/images/client2.png" alt="" title="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="license-box-img">
                                        <img src="/images/client3.png" alt="" title="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="license-box-img">
                                        <img src="/images/client4.png" alt="" title="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="license-box-img">
                                        <img src="/images/client5.png" alt="" title="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="license-box-img">
                                        <img src="/images/client6.png" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="license-box-slid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="license-box-slid-t">
                                    <h3>گواهینامه ها</h3>
                                </div>
                            </div>
                        </div>
                        <div id="prj" class="owl-carousel owl-theme ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="license-slide-info">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="license-slide-info-p">
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی
                                                            نامفهوم از صنعت چاپ و با استفاده از
                                                            طراحان گرافیک است. چاپگرها و متون بلکه
                                                            روزنامه و مجله در ستون و سطرآنچنان که
                                                            لازم است
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="license-slide-info-img">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="license-slide-info-img-t">
                                                                    <img src="/images/license-slide-info-img-t.png"
                                                                         alt="" title="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="license-slide-info-img-h">
                                                                    <h5>مدیریت</h5>
                                                                    <h6>گواهینامه های ما</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="license-slide-info">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="license-slide-info-p">
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی
                                                            نامفهوم از صنعت چاپ و با استفاده از
                                                            طراحان گرافیک است. چاپگرها و متون بلکه
                                                            روزنامه و مجله در ستون و سطرآنچنان که
                                                            لازم است
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="license-slide-info-img">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="license-slide-info-img-t">
                                                                    <img src="/images/license-slide-info-img-t.png"
                                                                         alt="" title="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="license-slide-info-img-h">
                                                                    <h5>مدیریت</h5>
                                                                    <h6>گواهینامه های ما</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--license-->

<!--call-->
<section class="call">
    <div class="container">
        <div class="call-t">
            <div class="row">
                <div class="col-md-4">
                    <div class="call-number">
                        <h4>با ما تماس بگیرید</h4>
                        <h5>028-33333333</h5>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="call-news">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="call-news-text">
                                    <h5>تمایل به در یافت خبرنامه دارید؟</h5>
                                    <h6>ایمیل خود را وارد کنید</h6>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="call-news-email">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="name@example.com">
                                        <div id="emailHelp" class="form-text">ایمیل شما نزد ما محفوظ است.</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--call-->

<!--news-->
<section class="news">
    <div class="container">
        <div class="news-t">
            <div class="row">
                <div class="col-md-12">
                    <div class="news-titre-t">
                        <h6>پروژه های اخیر</h6>
                        <h5>جدیدترین اخبار </h5>
                    </div>
                </div>
            </div>
            <div class="news-box">
                <div class="row">
                    @foreach($news as $item)
                        <div class="col-md-4">
                            <div class="news-box-t">
                                <div class="card">
                                    <img src="/images/{{$item->image}}" class="card-img-top" alt="...">
                                    <a href="#">
                                        <div class="card-body">
                                            <p class="card-text">
                                                {{ $item['text'] }}
                                            </p>
                                            <div class="news-date">
                                        <span>
                                             {{ $item['date'] }}
                                        </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="news-btn">
                        <a class="btn btn-primary" href="#" role="button">دیدن همه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--news-->
@endsection


<!-- Optional JavaScript -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script>
    document.getElementById("p1").style.display = "none";
</script>

<script>
    $('#prj').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 1
            }
        }
    })
</script>
<script>
    $(document).ready(function () {

        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        })

    })
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        function counter(id, start, end, duration) {
            let obj = document.getElementById(id),
                current = start,
                range = end - start,
                increment = end > start ? 1 : -1,
                step = Math.abs(Math.floor(duration / range)),
                timer = setInterval(() => {
                    current += increment;
                    obj.textContent = current;
                    if (current == end) {
                        clearInterval(timer);
                    }
                }, step);
        }

        counter("count1", 0, 44, 3000);
        counter("count2", 100, 2000, 2500);
        counter("count3", 0, 647, 3000);
        counter("count4", 0, 1489, 3000);
    });

</script>

</body>
</html>
