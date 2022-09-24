<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use Illuminate\Support\Facades\Redirect;
use Datatables;
class MessageController extends Controller
{
  public function index(){
      $messages=Message::all();

  	return view("admin.message.index",compact('messages'));
  }
    public function create(){
  	return view("admin.message.add");
  }
   public function store(Request $request){
   	 $this->validate(request(),[
        'firstname' => 'required|max:255',
        'email' => 'required|email|max:255',
        'lastname' => 'required|max:255',
        'subject' => 'required|max:255',
        'bodymsg' => 'required',

      ]);
	  $message=new Message;
  	$message->firstname=$request->firstname;
  	$message->lastname=$request->lastname;
  	$message->email=$request->email;
    $message->subject=$request->subject;
    $message->bodymsg=$request->bodymsg;
    $message->view=0;
   
  
   
    $message->save();
    return Redirect::back()->withFlashMessage("تمت اضافة رسالة بنجاح");
 	
  }
  public function edit($id,Message $message){
      $message=$message->find($id);
     return view("admin.message.edit",compact("message"));
  }
   public function update($id,Request $request,Message $message){
      $this->validate(request(),[
        'firstname' => 'required|max:255',
        'email' => 'required|email|max:255',
        'lastname' => 'required|max:255',
        'subject' => 'required|max:255',
        'bodymsg' => 'required'

      ]);
      $messageupdate=$message->find($id);
      $messageupdate->firstname=$request->firstname;
      $messageupdate->lastname=$request->lastname;
      $messageupdate->email=$request->email;
      $messageupdate->subject=$request->subject;
      $messageupdate->bodymsg=$request->bodymsg;
      $messageupdate->view=1;
   
  
   
    $messageupdate->save();
    
      return Redirect::back()->withFlashMessage("تمت تعديل بيانات الرسالة بنجاح");
  }
  public function delete($id,Message $message){
    
     $message->find($id)->delete();
     return Redirect("adminpanal/message/index")->withFlashMessage('تم حذف الرسالة');
  
  }
   public function contactus(){
        return view("website.bu.contact");
    }
 
}
