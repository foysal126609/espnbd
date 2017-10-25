<?php

namespace App\Http\Controllers;

use App\About;
use App\Client;
use App\Feature;
use App\Notice;
use App\Product;
use App\Slider;
use App\Team;
use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function homeContent(){
        $allPublishedProductsInfo = Product::where('publication_status','1')->get();
        $sliders = Slider::where('publication_status','1')->get();
        $features = Feature::where('publication_status','1')->get();
        $clientsMessageInfo = Client::where('publication_status','1')->get();
        return view('frontEnd.home',[
            'allPublishedProductsInfo'=>$allPublishedProductsInfo,
            'sliders'=>$sliders,
            'features'=>$features,
            'clientsMessageInfo'=>$clientsMessageInfo
        ]);
    }
    public function aboutUsContent(){
        $allPublishedAboutsInfo= About::where('publication_status',1)->get();
        $allPublishedTeamsInfo= Team::where('publication_status',1)->get();
        return view('frontEnd.aboutUs',[
            'allPublishedAboutsInfo'=>$allPublishedAboutsInfo,
            'allPublishedTeamsInfo'=>$allPublishedTeamsInfo
        ]);
    }
    public function categoryContent($id){
        $categoryProducts= Product::where('category_id',$id)->get();
        return view('frontEnd.category',[
            'categoryProducts'=>$categoryProducts
        ]);
    }
    public function NoticeContent(){
        $allPbulishedNotices= Notice::where('publication_status','1')->get();
        return view('frontEnd.notice',[
            'allPbulishedNotices'=>$allPbulishedNotices
        ]);
    }
    public function noticeDetaileContent($id){
        $allPbulishedNotices= Notice::where('notices.id',$id)->get();
        return view('frontEnd.notice-detaile',[
            'allPbulishedNotices'=>$allPbulishedNotices
        ]);
    }
    public function contactContent(){
        return view('frontEnd.contact');
    }
}
