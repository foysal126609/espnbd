@extends('frontEnd.master')
@section('title')
    ESPNBD -Notice
@endsection
@section('content')
    <!-- start single page header -->
    <section id="single-page-header" style=" background-image: url({{asset('/frontEndAssets/')}}/images/slider-5.jpg)">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2 class="title">Notice</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Notice</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End single page header -->
    <!-- Start latest news -->
    <section id="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Latest News</h2>
                        <span class="line"></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-news-content">
                        <div class="row">
                            <!-- start single latest news -->
                            @foreach($allPbulishedNotices as $allPbulishedNotice)
                            <div class="col-md-4">
                                <article class="blog-news-single">
                                    <div class="blog-news-img">
                                        <a href="blog-single-with-right-sidebar.html"><img src="{{asset($allPbulishedNotice->notice_image)}}" alt="image"></a>
                                    </div>
                                    <div class="blog-news-title">
                                        <h2><a href="blog-single-with-right-sidebar.html">{{$allPbulishedNotice->notice_title}}</a></h2>
                                        <p>By <a class="blog-author" href="#">{{$allPbulishedNotice->author_name}}</a> <span class="blog-date">|{{$allPbulishedNotice->created_at }}</span></p>
                                    </div>
                                    <div class="blog-news-details">
                                        <p>{{$allPbulishedNotice->notice_short_discription}}</p>
                                        <a class="blog-more-btn" href="{{url('/notice-detaile/'.$allPbulishedNotice->id)}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest news -->
    @endsection
