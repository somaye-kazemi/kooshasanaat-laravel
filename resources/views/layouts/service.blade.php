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
                        @for( $i=0; $i<sizeof($services); $i++)
                            <div class="serv-box">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="serv-box-img">
                                            <img src="/images/services/{{$services[$i]->image}}" alt="" title="">
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
