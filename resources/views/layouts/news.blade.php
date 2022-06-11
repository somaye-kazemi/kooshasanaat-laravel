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
                    @for($i=0; $i<=2; $i++)
                        <div class="col-md-4">
                            <div class="news-box-t">
                                <div class="card">
                                    <img src="/images/{{$news[$i]->image}}" class="card-img-top" alt="...">
                                    <a href="#">
                                        <div class="card-body">
                                            <p class="card-text">
                                                {{ $news[$i]['text'] }}
                                            </p>
                                            <div class="news-date">
                                        <span>
                                             {{ $news[$i]['date'] }}
                                        </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="news-btn">
                        <a class="btn btn-primary" href="/news" role="button">دیدن همه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
