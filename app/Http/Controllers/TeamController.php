<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function addTeamMessage(){
        return view('admin.team.add-team-message');
    }
    public function manageTeamMessage(){
        $allTeamMessages= Team::all();
        return view('admin.team.manage-team-massage',[
            'allTeamMessages'=>$allTeamMessages
        ]);
    }
    private function saveBasicTeamInfo($request,$imageUrl=null){
        $team = new Team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->message = $request->message;
        if($imageUrl){
            $team->image = $imageUrl;
        }
        $team->publication_status = $request->publication_status;
        $team->save();
    }
    private function saveTeamImage($Image){
        $imageName = $Image->getClientOriginalName();
        $directory = 'adminAssets/images/notice_image/';
        $imageUrl = $directory.$imageName;
        $Image->move($directory, $imageName);
        return $imageUrl;
    }

    public function saveTeamMessage(Request $request){
        $Image= $request->file('image');
        $imageUrl = $this->saveTeamImage($Image);
        $this->saveBasicTeamInfo($request,$imageUrl);
        return redirect('/add-team-message')->with('message','Team Message info save sccessfully');

    }
    public function unpublishedTeamMessageInfo($id){
        $teamMessageById = Team::find($id);
        $teamMessageById->publication_status = 0;
        $teamMessageById->save();
        return redirect('/manage-team-message');

    }
    public function publishedTeamMessageInfo($id){
        $teamMessageById = Team::find($id);
        $teamMessageById->publication_status = 1;
        $teamMessageById->save();
        return redirect('/manage-team-message');
    }
    public function deleteTeamMessageInfo($id){
        $teamMessageById = Team::find($id);
        $teamMessageById->delete();
        return redirect('/manage-team-message');
    }
}
