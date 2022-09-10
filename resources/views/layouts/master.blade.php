<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
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


@include('layouts.header')
@include("layouts.navbar")

@yield("banner")
@yield("recentpost")
@yield("main")

@include("layouts.footer")

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
