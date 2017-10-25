<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function addFeature(){
        return view('admin.feature.add-feature');
    }
    public function saveFeatureInfo(Request $request){
        $feature = new Feature();
        $feature->feature_heading = $request->feature_heading;
        $feature->feature_discription = $request->feature_discription;
        $feature->publication_status = $request->publication_status;
        $feature->save();
        return redirect('/add-feature')->with('message','Feature info save sccessfully');


    }
    public function manageFeature(){
        $allfeatures= Feature::all();
        return view('admin.feature.manage-feature',[
            'allfeatures'=>$allfeatures
        ]);
    }
    public function editFeatureInfo($id){
        $featureById= Feature::find($id);
        return view('admin.feature.edit-feature',[
            'featureById'=>$featureById
        ]);
    }
    public function updateFeatureInfo(Request $request){
        $feature = Feature::find($request->feature_id);
        $feature->feature_heading = $request->feature_heading;
        $feature->feature_discription = $request->feature_discription;
        $feature->publication_status = $request->publication_status;
        $feature->save();
        return redirect('/manage-feature')->with('message','Feature info update sccessfully');
    }
    public function unpublishedFeature($id){
        $featureById = Feature::find($id);
        $featureById->publication_status = 0;
        $featureById->save();
        return redirect('/manage-feature');

    }
    public function publishedFeature($id){
        $featureById = Feature::find($id);
        $featureById->publication_status = 1;
        $featureById->save();
        return redirect('/manage-feature');
    }
    public function deleteFeature($id){
        $featureById = Feature::find($id);
        $featureById->delete();
        return redirect('/manage-feature');
    }

}
