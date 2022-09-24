<?php

namespace App\Http\Controllers;
use App\DataTables\AdminDataTable;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Datatables;
use App\Bu;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Session;
use Session;
class UserController extends Controller
{
  public function index(AdminDataTable $admin){
    //$users=User::all();
    return $admin->render("admin.user.index1");
  	//return view("admin.user.index",compact('users'));
  }
  public function show(){

  }
 public function create(){
  	return view("admin.user.add");
  }
  public function store(Request $request){
 	$this->validate(request(),[
      'name' => 'required|max:255',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|min:6|confirmed',

      ]);
      
	  $user=new User;
  	$user->name=$request->name;
  	$user->email=$request->email;
    $user->admin=0;
  	$user->password= bcrypt($request->password);
    $user->save();
    return back()->withFlashMessage("تمت اضافة العضو بنجاح");
 	
  }
  public function edit($id,User $user,Bu $bu){
    $user=$user->find($id);
    $userbuc=$bu->where("userid",$id)->where("bu_status",1)->get();
    $userbuw=$bu->where("userid",$id)->where("bu_status",0)->get();
     return view("admin.user.edit",compact("user","userbuc","userbuw"));
  }
   public function update($id,Request $request,User $user){
      $this->validate(request(),[
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
      

      ]);
      $userupdate=$user->find($id);
      $userupdate->fill($request->all())->save();
    
      return Redirect::back()->withFlashMessage("تمت تعديل بيانات العضو بنجاح");
    }
  public function changepass(Request $request,User $user){
    $this->validate(request(),[
        'password' => 'required|min:6',

      ]);
    $userupdate=$user->find($request->userid);
    $userupdate->fill(['password'=> bcrypt($request->password)])->save();
     return Redirect::back()->withFlashMessage('تم تعير كلمة المرور');
  }
  public function delete($id,User $user){
    
     $user->find($id)->delete();
     return Redirect("adminpanal/user/index")->withFlashMessage('تم حذف العضو');
  
  }
 public function editprofile(){
      $user=Auth::user();   
     return view("website.user.edit",compact("user"));
  }
  public function changepassprofile(Request $request){
    $user=Auth::user();
    if($user->password != '$2y$10$E5EG43AjPHyiQum1oN7TWOrHiZ8NLLEjO.dJtFa1egjchDSjxEM02'){
      Session::flash("msg","Sorry The Old Password Not Coorect");
       return Redirect::back();
       
    }else{
      $userupdate=$user->find($request->userid);
      $userupdate->fill(['password'=> bcrypt($request->password)])->save();
       return Redirect::back()->withFlashMessage('تم تعير كلمة المرور');
   }
  }
  public function anyData(){

    $users=User::all();
    return Datatables::of($users)
            ->editColumn("name",function($model) {
              
              return $model->name;
            })
             ->editColumn("admin",function($model) {
              return $model->admin== 0 ? '<span class="badge badge-info"> عضو </span>' : '<span class="badge badge-warning"> مدير الموقع </span>';
              })
              ->editColumn("control",function($model) {
                  $all='<a href="edit\\' . $model->id . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> '; 
                  $all .='<a href="delete\\' . $model->id . '" class="btn btn-danger btn-circle"><i class="fa fa-close"></i></a>'; 
                  return $all;
              })
              ->make(true);
  }
}
