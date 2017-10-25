@extends('frontEnd.master')

@section('title')
    ESPNBD - HOME
@endsection

@section('content')
    <!-- Start slider -->
    <section id="slider">
        <div class="main-slider">
            @foreach($sliders as $slider)
            <div class="single-slide">
                <img src="{{asset($slider->slider_image)}}" alt="img">
            </div>
            @endforeach
        </div>
    </section>
    <!-- End slider -->
    <!-- Start about  -->
    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">SHEIKH FARID CORPORATION LTD.</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about  -->
    <!-- Start counter -->
    <section id="counter" style=" background-image: url({{asset('/frontEndAssets/')}}/images/counter-bg.jpg)">
        <div class="counter-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="counter-area">
                            <div class="row">
                                <!-- Start single counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-counter">
                                        <div class="counter-icon">
                                            <i class="fa fa-suitcase"></i>
                                        </div>
                                        <div class="counter-no counter">
                                            45
                                        </div>
                                        <div class="counter-label">
                                            Delars
                                        </div>
                                    </div>
                                </div>
                                <!-- End single counter -->
                                <!-- Start single counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-counter">
                                        <div class="counter-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="counter-no counter">
                                            60
                                        </div>
                                        <div class="counter-label">
                                            Employees
                                        </div>
                                    </div>
                                </div>
                                <!-- End single counter -->
                                <!-- Start single counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-counter">
                                        <div class="counter-icon">
                                            <i class="fa fa-trophy"></i>
                                        </div>
                                        <div class="counter-no counter">
                                            03
                                        </div>
                                        <div class="counter-label">
                                            Awards
                                        </div>
                                    </div>
                                </div>
                                <!-- End single counter -->
                                <!-- Start single counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-counter">
                                        <div class="counter-icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="counter-no counter">
                                            130
                                        </div>
                                        <div class="counter-label">
                                            Products
                                        </div>
                                    </div>
                                </div>
                                <!-- End single counter -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End counter -->
    <!-- Start Pricing table -->

    <section id="pricing-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Our Regular Product</h2>
                        <span class="line"></span>
                        <!--                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>-->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pricing-table-content">
                        <div class="row" >
                            @foreach($allPublishedProductsInfo as $allPublishedProductInfo)
                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 25px">
                                <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="price-header" style="margin-bottom: 8%; ">
                                        <h3 style="font-size: 14px !important;">{{$allPublishedProductInfo->product_name}}</h3>
                                        <h4>{{$allPublishedProductInfo->product_price}}.00 BDT</h4>
                                    </div>
                                    <div class="price-article">
                                        <img src="{{asset($allPublishedProductInfo->product_image)}}" alt="" style="width: 200px; height: 200px;">
                                    </div>
                                    <div class="price-footer">
                                        <a class="purchase-btn" href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Pricing table -->
    <!-- Start Testimonial section -->
    <section id="testimonial" style=" background-image: url({{asset('/frontEndAssets/')}}/images/testimonial-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-area">
                                <h2 class="title">Whats Client Say</h2>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- Start testimonial slider -->
                            <div class="testimonial-slider">
                                <!-- Start single slider -->
                                @foreach($clientsMessageInfo as $clientMessageInfo)
                                <div class="single-slider">
                                    <div class="testimonial-img">
                                        <img src="{{asset($clientMessageInfo->client_image)}}" alt="testimonial image">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>{{$clientMessageInfo->client_massage}}</p>
                                        <h6>{{$clientMessageInfo->client_name}} ,<span>{{$clientMessageInfo->client_designation}}</span></h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonial section -->
    <!-- Start Feature -->
    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Our Features</h2>
                        <span class="line"></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="feature-content">
                        @foreach($features as $feature)
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-feature wow zoomIn">
                                    {{--<i class="fa fa-leaf feature-icon"></i>--}}
                                    <h4 class="feat-title">{{$feature->feature_heading}}</h4>
                                    <p>{{$feature->feature_discription}}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature -->
@endsection