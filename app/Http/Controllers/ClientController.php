<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
   public function addClientMessage(){
       return view('admin.client.add-client-message');
   }
   public function manageClientMessage(){
       $allClientsInfo= Client::all();
       return view('admin.client.manage-client-message',[
           'allClientsInfo'=>$allClientsInfo
       ]);
   }
    private function saveBasicClientInfo($request,$imageUrl=null){
        $client = new Client();
        $client->client_name = $request->client_name;
        $client->client_designation = $request->client_designation;
        $client->client_massage = $request->client_massage;
        if($imageUrl){
            $client->client_image = $imageUrl;
        }
        $client->publication_status = $request->publication_status;
        $client->save();
    }
    private function saveClientImage($clientImage){
        $imageName = $clientImage->getClientOriginalName();
        $directory = 'adminAssets/images/notice_image/';
        $imageUrl = $directory.$imageName;
        $clientImage->move($directory, $imageName);
        return $imageUrl;
    }

   public function saveClientMessageInfo(Request $request){
       $clientImage= $request->file('client_image');
       $imageUrl = $this->saveClientImage($clientImage);
       $this->saveBasicClientInfo($request,$imageUrl);
       return redirect('/add-client-message')->with('message','Client Message info save sccessfully');

   }
    public function unpublishedClientMessageInfo($id){
        $clientMessageById = Client::find($id);
        $clientMessageById->publication_status = 0;
        $clientMessageById->save();
        return redirect('/manage-client-message');

    }
    public function publishedClientMessageInfo($id){
        $clientMessageById = Client::find($id);
        $clientMessageById->publication_status = 1;
        $clientMessageById->save();
        return redirect('/manage-client-message');
    }
    public function deleteClientMessageInfo($id){
        $clientMessageById = Client::find($id);
        $clientMessageById->delete();
        return redirect('/manage-client-message');
    }
}
