<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Cookie;
use App\Bu;
use DB;
use App\Http\Requests\BuRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Session;
class BuController extends Controller
{
  public function index(Request $request){
    $id=$request->id;
    if($id == null){
      $bu=DB::table('buildings')
          ->join('users', 'users.id', '=', 'buildings.userid')->select("buildings.*","users.name")->get();
    }
    else{
      $bu=DB::table('buildings')
          ->join('users', 'users.id', '=', 'buildings.userid')->select("buildings.*","users.name")->where("users.id",$id)->get();
    }
  	
    return view("admin.bu.index",compact('bu',"id"));
    	
  }
  public function create(){
  	
  	return view("admin.bu.add");
  	
  }
  public function store(Request $burequest,Bu $bu){
    $this->validate(request(),[
     'bu_name'          =>"required|min:5|max:100",
     'bu_price'        =>"required", 
     'bu_rent'         =>"required|integer", 
     'bu_square'       =>"required|min:2|max:100", 
     'bu_type'         =>"required|integer",
      'bu_small_dis'   =>"required|min:5|max:160", 
      'bu_meta'        =>"required|min:5|max:200",
      'bu_langtuide'    =>"required", 
      'bu_lattuie'      =>"required", 
      'bu_largedis'     =>"required|min:5", 
      'bu_status'       =>"required|integer",
       'rooms'          =>"required|integer",
       'image'          =>"required"
      ]);
    $user=Auth::user();
    $image_name=time() . '.' . $burequest->image->getClientOriginalExtension();
   $data=[
      'bu_name'          => $burequest->bu_name,
      'bu_price'         => $burequest->bu_price, 
      'bu_rent'          => $burequest->bu_rent,
       'bu_square'        => $burequest->bu_square,
       'bu_type'          => $burequest->bu_type,
       'bu_small_dis'     => $burequest->bu_small_dis, 
       'bu_meta'          => $burequest->bu_meta, 
       'bu_langtuide'     => $burequest->bu_langtuide, 
       'bu_lattuie'       => $burequest->bu_lattuie, 
       'bu_largedis'      => $burequest->bu_largedis, 
       'bu_status'        => $burequest->bu_status,
       'userid'           => 1,//$user->id,
       'rooms'            => $burequest->rooms,
       'image'            => $image_name,

    ];
    $bu->create($data);
    $burequest->image->move(public_path('admin/img'),$image_name);
   return Redirect("adminpanal/bu/index")->withFlashMessage("تمت اضافة العقار بنجاح");
  }
  public function edit($id,Bu $bu){
    $bu=$bu->find($id);
    $userguest=0;
    return view("admin.bu.edit",compact("bu","userguest"));

  }
  public function update($id,Request $request,Bu $bu){
     $this->validate(request(),[
       'bu_name'          =>"required|min:5|max:100",
       'bu_price'        =>"required", 
       'bu_rent'         =>"required|integer", 
       'bu_square'       =>"required|min:2|max:100", 
       'bu_type'         =>"required|integer",
        'bu_small_dis'   =>"required|min:5|max:160", 
        'bu_meta'        =>"required|min:5|max:200",
        'bu_langtuide'    =>"required", 
        'bu_lattuie'      =>"required", 
        'bu_largedis'     =>"required|min:5", 
        'bu_status'       =>"required|integer",
         'rooms'          =>"required|integer",
         'image'          =>"required"
      ]); 
    $image_name=time() . '.' . $request->image->getClientOriginalExtension();
    $requestall=array_except($request->all(),['image']);
    $buupdate=$bu->find($id);    
    $buupdate->fill($requestall);
    $buupdate->image=$image_name;
    $buupdate->save();
    if(file_exists(public_path('/admin/img/' . $buupdate->image))){
      unlink(public_path('/admin/img/' . $buupdate->image));
       $request->image->move(public_path('admin/img'),$image_name);       
    }
    else{
    $request->image->move(public_path('admin/img'),$image_name);
  }
    return back()->withFlashMessage("تمت تعديل العقار بنجاح");
  
  }
  public function delete($id,Bu $bu){
    $bu->find($id)->delete();
     return Redirect::back()->withFlashMessage("تمت حذف العقار بنجاح");
  }
   public function showall(Bu $bu){
      $all=$bu->where("bu_status",1)->orderBy("id","desc")->paginate(3);
        return view("website.bu.all",compact('all'));
      
    }
    public function forrent(Bu $bu){
      $all=$bu->where("bu_status",1)->where("bu_rent",1)->orderBy("id","desc")->paginate(3);
        return view("website.bu.all",compact('all'));
      
    }
    public function forbuy(Bu $bu){
      $all=$bu->where("bu_status",1)->where("bu_rent",0)->orderBy("id","desc")->paginate(3);
        return view("website.bu.all",compact('all'));
      
    }
    public function type($id,Bu $bu){
      $all=$bu->where("bu_status",1)->where("bu_type",$id)->orderBy("id","desc")->paginate(3);
        return view("website.bu.all",compact('all'));
      
    }
     public function showtype(Bu $bu){
      $all=$bu->where("bu_status",1)->where("bu_type",0)->orderBy("id","desc")->paginate(3);
        return view("website.bu.all",compact('all'));
      
    }
    public function search(Request $request,Bu $bu){
    //this first method but nopagination
     /* $allrequest=array_except($request->toArray(),["submit","_token"]);
      $output = "";
      $i=0;
      foreach ($allrequest as $key => $value) {
        if($value != ""){
          $where = $i == 0 ? " where " : " and ";
          $output .=$where  . ' ' . $key .' = ' . $value;
          $i++;
        }
      }
      $sql="select * from buildings" .$output;
        $all=DB::select($sql);
        $search="search";
       return view("website.bu.all",compact('all','search'));*/
       $allrequest=array_except($request->toArray(),["submit","_token",'page']);
       $query=DB::table("buildings")->select('*');
       $i=0;
       $count=count($allrequest);
       $array=[];
       $min=$request->bu_price_from == '' ? 0 : $request->bu_price_from;
       $max=$request->bu_price_to == '' ? 1000 : $request->bu_price_to;

       foreach ($allrequest as $key => $value) {
        $i++;
        if($value != '') {
          if($key == "bu_price_from" && $request->bu_price_to == ''){
             $query->where("bu_price",">=",$value);
          }
          elseif($key == "bu_price_to" && $request->bu_price_from == ''){
             $query->where("bu_price","<=",$value);              
          }
          elseif ($count == $i && $request->bu_price_to != '' && $request->bu_price_from !='') {
            $query->whereBetween("bu_price",[$request->bu_price_from, $request->bu_price_to]);
            $array[$key]=$value;
          }
          else{
            if($key != "bu_price_to" && $key != 'bu_price_from'){
              $query->where($key,$value);
            }
          }

          $array[$key]=$value;
          }
       
       }

       $all=$query->paginate(3);
        return view("website.bu.all",compact('all',"array"));
      
    }
    public function single($id,Bu $bu){
      $single=$bu->findOrFail($id);
      $search="a";
      if($single->bu_status == 0){
        return view("website.bu.noper",compact("single","search"));
      }
      $samerent=$bu->where("bu_rent",$single->bu_rent)->take(3)->orderBy("id")->get();
      $sametype=$bu->where("bu_type",$single->bu_type)->take(3)->orderBy("id")->get();
      return view("website.bu.single",compact('single','search','samerent','sametype'));
      
    }
   function bucreatefrontwebsite(Bu $bu){
      $all=$bu->where("bu_status",1)->orderBy("id","desc")->paginate(3);
      return view("website.bu.addbuilding",compact('all'));
   }
     public function storebu(Request $burequest,Bu $bu){
       $this->validate(request(),[
       'bu_name'          =>"required|min:5|max:100",
       'bu_price'        =>"required", 
       'bu_rent'         =>"required|integer", 
       'bu_square'       =>"required|min:2|max:100", 
       'bu_type'         =>"required|integer",
        'bu_small_dis'   =>"required|min:5|max:160", 
        'bu_langtuide'    =>"required", 
        'bu_lattuie'      =>"required", 
        'bu_largedis'     =>"required|min:5", 
         'rooms'          =>"required|integer",
         'image'          =>"required"
        ]);
        $user=Auth::user();
        $image_name=time() . '.' . $burequest->image->getClientOriginalExtension();
         $data=[
           'bu_name'          => $burequest->bu_name,
           'bu_price'         => $burequest->bu_price, 
           'bu_rent'          => $burequest->bu_rent,
           'bu_square'        => $burequest->bu_square,
           'bu_type'          => $burequest->bu_type,
           'bu_small_dis'     => $burequest->bu_small_dis, 
           'bu_langtuide'     => $burequest->bu_langtuide, 
           'bu_lattuie'       => $burequest->bu_lattuie, 
           'bu_largedis'      => $burequest->bu_largedis, 
           'userid'           => $user->id,
           'rooms'            => $burequest->rooms,
           'image'            => $image_name,

        ];
        $bu->create($data);
         $burequest->image->move(public_path('admin/img'),$image_name);
       return Redirect::back()->withFlashMessage("تم اضافة العقار بنجاح");
    }
   function allbuildings(Bu $bu){
      $user=Auth::user()->id;
      $all=$bu->where("userid",$user)->where("bu_status",1)->orderBy("id","desc")->paginate(3);
      return view("website.bu.a",compact('all'));
   }
    function allbuilding(Bu $bu){
      $user=Auth::user()->id;
      $all=$bu->where("userid",$user)->where("bu_status",0)->orderBy("id","desc")->paginate(3);
      return view("website.bu.a",compact('all'));
   }
    public function buedit($id,Bu $bu){

      $bu=$bu->find($id);
      if(Auth::user()->id == $bu->userid){
        $search="a";
        return view("website.bu.forms.edit",compact("bu","search"));
      }
      else{
         return redirect()->back();
      }

    }
  public function updatebu($id,Request $request,Bu $bu){
      
   
    $requestall=array_except($request->all(),['image']);
    $buupdate=$bu->find($id);    
    $buupdate->fill($requestall);
    if(isset($request->image) && $request->image->getClientOriginalExtension() != ''){
       $image_name=time() . '.' . $request->image->getClientOriginalExtension();
      $buupdate->image=$image_name;
    }
    $buupdate->save();
    if(file_exists(public_path('/admin/img/' . $buupdate->image)) && isset($request->image) && $request->image->getClientOriginalExtension() != ''){
      unlink(public_path('/admin/img/' . $buupdate->image));
       $request->image->move(public_path('admin/img'),$image_name);       
    }
    elseif(isset($request->image) && $request->image->getClientOriginalExtension() != ''){
    $request->image->move(public_path('admin/img'),$image_name);
    }
      return Redirect::back()->withFlashMessage("تم تعديل العقار بنجاح");
  }
}
