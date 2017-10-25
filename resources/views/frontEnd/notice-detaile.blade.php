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
                                <li class="active">Notice detaile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End single page header -->
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3" style="margin-top: 50px">
    @foreach($allPbulishedNotices as $allPbulishedNotice )
    <article class="blog-news-single">
        <div class="blog-news-img">
            <img src="{{asset($allPbulishedNotice->notice_image)}}" alt="image">
        </div>
        <div class="blog-news-title">
            <h2>{{$allPbulishedNotice->notice_title}}</h2>
            <p>By <a class="blog-author" href="#">{{$allPbulishedNotice->author_name}}</a> <span class="blog-date">|{{$allPbulishedNotice->created_at }}</span></p>
        </div>
        <div class="blog-news-details blog-single-details">
            <p>{{$allPbulishedNotice->notice_short_discription}}</p>
            <p>{{$allPbulishedNotice->notice_long_discription}}</p>

        </div>
    </article>
    @endforeach
    </div>
    </div>
    <!-- End latest news -->
@endsection
