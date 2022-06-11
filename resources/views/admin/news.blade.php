@extends("layouts.admin.master-admin")
@section("main")
    <section class="body4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="card-title-r">
                                        <h4>آخرین درامد ها</h4>
                                    </div>
                                    <div>
                                        <a class="btn btn-success" href="/admin/news/create">افزودن خبر جدید</a>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card-title-l d-flex justify-content-between">
                                        <i class="fa fa-calendar-o"></i>
                                        <span>1400/11/20 - 1400/12/-8</span>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-right">ردیف</th>
                                    <th class="text-center">عنوان</th>
                                    <th class="text-center">توضیحات</th>
                                    <th class="text-center ">مالیات</th>
                                    <th class="text-center">ارزش افزوده</th>
                                    <th class="text-center"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $index => $news)
                                    <tr>
                                        <td class="text-right">{{$index+1}}</td>
                                        <td class="text-center">{{$news->date}}</td>
                                        <td class="text-center text-success">{{$news->text}}</td>
                                        <td class="text-center text-danger">-3.020</td>
                                        <td class="text-center">28.670.90</td>
                                        <td class="text-center">
                                            <a href="#">
                                                <i class="fa fa-external-link"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-table-b">
                            <div class="row">
                                <div class="col-md-4 d-flex ">
                                    <div class="card-table-b-r">
                                        <i class="fa fa-bar-chart text-success"></i>
                                    </div>
                                    <div class="card-table-b-l">
                                        <h6>درآمد خالص</h6>
                                        <h5>1.958.104</h5>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex ">
                                    <div class="card-table-b-r">
                                        <i class="fa fa-hand-lizard-o text-danger rounded-circle"></i>
                                    </div>
                                    <div class="card-table-b-l">
                                        <h6>درآمد خالص</h6>
                                        <h5>1.958.104</h5>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex ">
                                    <div class="card-table-b-r">
                                        <i class="fa fa-dollar text-warning rounded-circle"></i>
                                    </div>
                                    <div class="card-table-b-l">
                                        <h6>درآمد خالص</h6>
                                        <h5>1.958.104</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
