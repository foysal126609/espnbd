@extends('frontEnd.master')
@section('title')
    ESPNBD - About
@endsection

@section('content')
 <!-- start single page header -->
<section id="single-page-header" style=" background-image: url({{asset('/frontEndAssets/')}}/images/slider-5.jpg)">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-page-header-left">
                        <h2 class="title">About us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-page-header-right">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End single page header -->

 <!-- Start about -->
 <section id="about">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="about-content">
                     <div class="row">
                         @foreach($allPublishedAboutsInfo as $allPublishedAboutInfo)
                         <div class="col-md-6">
                             <div>
                                 <h3>{{$allPublishedAboutInfo->heading}}</h3>
                                 <div class="">
                                     <p class="text-muted text-justify">{{$allPublishedAboutInfo->message}}</p>
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
 <!-- end about -->
 <!-- Start team member -->
 <section id="our-team">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="title-area">
                     <h2 class="title">Our Team</h2>
                     <span class="line"></span>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                 </div>
             </div>
             <div class="col-md-12">
                 <div class="our-team-content">
                     <div class="row">
                         <!-- Start single team member -->
                         @foreach($allPublishedTeamsInfo as $allPublishedTeamInfo)
                         <div class="col-md-3 col-sm-6 col-xs-12">
                             <div class="single-team-member">
                                 <div class="team-member-img">
                                     <img src="{{asset($allPublishedTeamInfo->image)}}" alt="team member img">
                                 </div>
                                 <div class="team-member-name">
                                     <p>{{$allPublishedTeamInfo->name}}</p>
                                     <span>{{$allPublishedTeamInfo->designation}}</span>
                                 </div>
                                 <p>{{$allPublishedTeamInfo->message}}</p>

                             </div>
                         </div>
                         @endforeach
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end team member -->
@endsection


