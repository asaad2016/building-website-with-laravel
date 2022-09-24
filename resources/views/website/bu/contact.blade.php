@extends('layouts.app')
@section('title')
   اتصل بنا
@endsection
@section('content')
	<form class="well" method="post" action="{{ url('/adminpanal/message/store') }}">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="label-control">الرسالة</label> 
                    <textarea class="form-control" id="bodymsg" name="bodymsg"
                    rows="10">
                    </textarea>
                </div>
                <button class="btn btn-primary pull-right" type="submit">ارسال</button> 
            </div> 
            <div class="col-sm-8">
                <div class="form-group">
                     <label class="label-control">الاسم الاول</label>
                     <input class="form-control" placeholder=
                     "الاسم الاول" type="text" name="firstname">                
                </div>
                <div class="form-group">
                    <label class="label-control" na>الاسم الاخير</label>
                    <input class="form-control" placeholder="الاسم الاخير" type="text" name="lastname">
                   
                </div>
                <div class="form-group">
                     <label class="label-control">الايميل</label>
                     <input class="form-control" placeholder="الايميل" type="text" name="email">                  
                 </div>
                 <div class="form-group">
                     <label class="label-control">الموضوع</label>
                     <select class="form-control"  id="subject" name="subject" >
        
                        <option value="الخدمات">
                            الخدمات
                        </option>
        
                        <option value="الاقترحات">
                            الاقترحات
                        </option>
        
                        <option value="غير ذلك">
                           غير ذلك
                        </option>
                     </select>
                    
                </div>
            </div>
    
            
        </div>
    </form>

@endsection