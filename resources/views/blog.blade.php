
@extends("layouts.master")

@section("banner")
    @include("layouts.banner")
@endsection

@section("main")
<section class="blog">
    <div class="container">
        <div class="row">
            <!--sidebar-->
                @include("layouts.recentpost")

            <!--sidebar-->

            <!--news-->
            <div class="col-md-8">
                <div class="sidebar-last-post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sidebar-last-post-t">
                                <img src="/images/news1.jpg" alt="" title="">
                                <div class="sidebar-last-info">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> ادمین </a> </li>
                                        <li><a href="#"><i class="fa fa-folder"></i> بلاگ </a> </li>
                                        <li><a href="#"><i class="fa fa-calendar"></i> 18، بهمن، 1400 </a> </li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 3 کامنت </a> </li>
                                    </ul>
                                </div>
                                <div class="sidebar-last-titre">
                                    <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>
                                    <a class="btn btn-primary " href="#" role="button">ادامه مطلب</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--news-->
        </div>
    </div>
</section>
@endsection
