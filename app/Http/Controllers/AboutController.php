<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function addAbout(){
        return view('admin.about.add-about');
    }
    public function manageAbout(){
        $allAbouts= About::all();
        return view('admin.about.manage-about',[
            'allAbouts'=>$allAbouts
        ]);
    }
    public function saveAboutInfo(Request $request){
        $about = new About();
        $about->heading = $request->heading;
        $about->message = $request->message;
        $about->publication_status = $request->publication_status;
        $about->save();
        return redirect('/add-about')->with('message','About info save successfully');
    }
    public function editAboutInfo($id){
        $aboutInfoById= About::find($id);
        return view('admin.about.edit-about',[
            'aboutInfoById'=>$aboutInfoById
        ]);
    }
    public function updateAboutInfo(Request $request){
        $about = About::find($request->about_id);
        $about->heading = $request->heading;
        $about->message = $request->message;
        $about->publication_status = $request->publication_status;
        $about->save();
        return redirect('/manage-about')->with('message','About info update successfully');

    }
    public function unpublishedAboutInfo($id){
        $aboutById = About::find($id);
        $aboutById->publication_status = 0;
        $aboutById->save();
        return redirect('/manage-about');

    }
    public function publishedAboutInfo($id){
        $aboutById = About::find($id);
        $aboutById->publication_status = 1;
        $aboutById->save();
        return redirect('/manage-about');
    }
    public function deleteAboutInfo($id){
        $aboutById = About::find($id);
        $aboutById->delete();
        return redirect('/manage-about');
    }
}
