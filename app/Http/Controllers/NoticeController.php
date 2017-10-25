<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function addNotice(){
        return view('admin.notice.add-notice');
    }
    public function manageNotice(){
        $allnotices = Notice::all();
        return view('admin.notice.manage-notice',[
            'allnotices'=>$allnotices
        ]);
    }
    private function saveBasicNoticeInfo($request,$imageUrl=null){
        $notice = new Notice();
        $notice->notice_title = $request->notice_title;
        $notice->author_name = $request->author_name;
        $notice->notice_short_discription = $request->notice_short_discription;
        $notice->notice_long_discription = $request->notice_long_discription;
        if($imageUrl){
            $notice->notice_image = $imageUrl;
        }
        $notice->publication_status = $request->publication_status;
        $notice->save();
    }
    private function saveNoticeImage($noticeImage){
        $imageName = $noticeImage->getClientOriginalName();
        $directory = 'adminAssets/images/notice_image/';
        $imageUrl = $directory.$imageName;
        $noticeImage->move($directory, $imageName);
        return $imageUrl;
    }
    public function saveNoticeInfo(Request $request){
        $noticeImage= $request->file('notice_image');
        $imageUrl = $this->saveNoticeImage($noticeImage);
        $this->saveBasicNoticeInfo($request,$imageUrl);
        return redirect('/add-notice')->with('message','notice info save sccessfully');
    }
    public function viewDetailsNoticeInfo($id){
        $noticeById= Notice::find($id);
        return view('admin.notice.view-notice',[
            'noticeById'=>$noticeById
        ]);
    }
    public function editNoticeInfo($id){
        $noticeById= Notice::find($id);
        return view('admin.notice.edit-notice',[
            'noticeById'=>$noticeById
        ]);
    }
    private function updateNoticeBasicInfo($request, $imageUrl=null){
        $notice = Notice::find($request->notice_id);
        $notice->notice_title = $request->notice_title;
        $notice->author_name = $request->author_name;
        $notice->notice_short_discription = $request->notice_short_discription;
        $notice->notice_long_discription = $request->notice_long_discription;
        if($imageUrl){
            $notice->notice_image = $imageUrl;
        }
        $notice->publication_status = $request->publication_status;
        $notice->save();
    }
    public function updateNoticeInfo(Request $request){
        $noticeImage = $request->file('notice_image');
        if($noticeImage){
            $notice = Notice::find($request->notice_id);
            unlink($notice->notice_image);
            $imageUrl = $this->saveNoticeImage($noticeImage);
            $this->updateNoticeBasicInfo($request,$imageUrl);
        }else{
            $this->updateNoticeBasicInfo($request);
        }
        return redirect('/manage-notice')->with('message','notice info update Sccessfully');

    }
    public function unpublishedNotice($id){
        $noticeById = Notice::find($id);
        $noticeById->publication_status = 0;
        $noticeById->save();
        return redirect('/manage-notice');

    }
    public function publishedNotice($id){
        $noticeById = Notice::find($id);
        $noticeById->publication_status = 1;
        $noticeById->save();
        return redirect('/manage-notice');
    }
    public function deleteNotice($id){
        $noticeById = Notice::find($id);
        $noticeById->delete();
        return redirect('/manage-notice');
    }

}
