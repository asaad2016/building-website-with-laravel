<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Settings;
use App\User;

use Session;
class SettingController extends Controller
{
  private $set;
  public function index(){
    $setting=Settings::all();
	  return view("admin.setting.index",compact('setting'));

  }
  public function create(){
    $setting=Settings::all();
   
    for ($i=0;$i<count($setting);$i++) {
     $this->set=$setting[0][0];
    }
    if($this->set ==""){
	    return view("admin.setting.add",compact('setting'));
 
    }
    else{
      return Redirect("adminpanal/setting/index");
    }
  }
  public function store(Request $request){
   	 $this->validate(request(),[
         'sitename' => 'required|max:255',
         'keywords' => 'required',
         'value' => 'required',
      ]);
	  $setting=new Settings;
  	$setting->sitename=$request->sitename;
    $setting->yt=$request->yt;
    $setting->fb=$request->fb;
    $setting->tw=$request->tw;
    $setting->address=$request->address;
    $setting->keywords=$request->keywords;
  	$setting->value= $request->value;	
    $setting->save();
    return Redirect::back()->withFlashMessage("تمت اضافة الاعدادت بنجاح");
 	
  }
  public function edit($id,Settings $setting,Request $request){
    $setting=$setting->find($id);
 
    return view("admin.setting.edit",compact("setting","request"));
  }
 public function update($id,Request $request,Settings $setting){
   	$settingupdate=$setting->find($id);
    $settingupdate->fill($request->all())->save();

      return Redirect::back()->withFlashMessage("تمت تعديل الاعدادت بنجاح");
	}
  public function delete($id,Settings $setting){
  
    $setting->find($id)->delete();
    return Redirect("adminpanal/setting/index")->withFlashMessage('تم الحذف');
    $this->set="";
  }

}
