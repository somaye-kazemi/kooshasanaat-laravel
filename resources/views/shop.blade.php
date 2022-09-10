@extends("layouts.master")

@section("banner")
    @include("layouts.banner")
@endsection


@section("main")
    <section class="shop">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @for($i=0; $i<=3; $i++)
                    <div class="shop-box">
                        <div class="shop-img">
                            <img src="/images/shop/{{$shop[$i]->image}}" alt="" title="">                        </div>
                        <div class="shop-text">
                            <p>
                                {{ $shop[$i]['text']}}
                            </p>
                        </div>
                        <div class="shop-price">
                            <span>
                                  {{$shop[$i]['numberBetween']}}
                            </span>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
