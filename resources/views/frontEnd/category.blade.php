@extends('frontEnd.master')
@section('title')
    ESPNBD - Category
    @endsection

@section('content')
    <!-- Start single page header -->
    <section id="single-page-header" style=" background-image: url({{asset('/frontEndAssets/')}}/images/slider-5.jpg)">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2>Category</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End single page header -->

    <!-- Start blog archive -->
    <section id="blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-archive-area">
                        <div class="row">

                            @foreach($categoryProducts as $categoryProduct)
                                <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 25px">
                                    <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                        <div class="price-header" style="margin-bottom: 8%; ">
                                            <h3 style="font-size: 14px !important;">{{$categoryProduct->product_name}}</h3>
                                            <h4>{{$categoryProduct->product_price}} BDT</h4>
                                        </div>
                                        <div class="price-article">
                                            <img src="{{asset($categoryProduct->product_image)}}" alt="" style="width: 200px; height: 200px;">
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
    <!-- End blog archive -->
    @endsection