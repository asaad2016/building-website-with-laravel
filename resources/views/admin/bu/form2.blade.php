<style>

  .bu_create .info{
    margin-bottom: 15px;
    
  }
  .bu_create input,.bu_create textarea,.bu_create .alert{
    text-align: right;
  }
  .bu_create button i{
    margin-right: 10px;
  }
</style>
<form class="bu_create" role="form" method="POST" action="{{ url('/adminpanal/bu/storebu') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group{{ $errors->has('bu_name') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            <input id="bu_name" type="text" class="form-control" name="bu_name" value="{{ old('bu_name') }}">

            @if ($errors->has('bu_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_name') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_name" class="control-label col-md-2 info">اسم العقار</label>
    </div>
    <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('rooms') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            <input id="rooms" type="text" class="form-control" name="rooms" value="{{ old('rooms') }}">

            @if ($errors->has('bu_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('rooms') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_name" class="control-label col-md-2 info">عدد الغرف</label>
    </div>
    <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('bu_price') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            <input id="bu_price" type="text" class="form-control" name="bu_price" value="{{ old('bu_price') }}">

            @if ($errors->has('bu_price'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_price') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_price" class="control-label col-md-2 info">سعر العقار</label>
    </div>
    <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('bu_rent') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
             {!! Form::select("bu_rent",bu_rent(),null,['class'=>'form-control']) !!}

            @if ($errors->has('bu_rent'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_rent') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_rent" class="control-label col-md-2 info">نوع العملية</label>
    </div>
    <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('bu_type') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            {!! Form::select("bu_type",bu_type(),null,['class'=>'form-control']) !!}

            @if ($errors->has('bu_type'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_type') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_type" class="control-label col-md-2 info">الحالة</label>
    </div>
    <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('bu_square') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            <input id="bu_square" type="text" class="form-control" name="bu_square">

            @if ($errors->has('bu_square'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_square') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_square" class="control-label col-md-2 info">مساحة العقار</label>
    </div>
    <div style="clear: both;"></div>
   
    <div class="form-group{{ $errors->has('bu_small_dis') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            <textarea id="bu_small_dis" name="bu_small_dis" class="form-control" rows="4"></textarea>  

            @if ($errors->has('bu_small_dis'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_small_dis') }}</strong>
                </span>
            @endif
            <div class="alert alert-danger">
                لا يمكن كتابة وصف العقار اكتر من 160 حرف
            </div>
        </div>
        <label for="bu_small_dis" class="control-label col-md-2 info">الوصف</label>
    </div>
     <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('bu_langtuide') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            <input id="bu_langtuide" type="text" class="form-control" name="bu_langtuide">

            @if ($errors->has('bu_langtuide'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_langtuide') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_langtuide" class="control-label col-md-2 info">خط الطول</label>
    </div>
     <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('bu_lattuie') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            <input id="bu_lattuie" type="text" class="form-control" name="bu_lattuie">

            @if ($errors->has('bu_lattuie'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_lattuie') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_lattuie" class="control-label col-md-2 info">دائرة العرض</label>
    </div>
    <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('bu_largedis') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
           <textarea id="bu_largedis" name="bu_largedis" class="form-control"></textarea> 

            @if ($errors->has('bu_largedis'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_largedis') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_largedis" class="control-label col-md-2 info">وصف مطول للعقار</label>
    </div>
    <div style="clear: both;"></div>
    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
        <div class="col-md-10 info">
            <input type="file" name="image">
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
        <label for="image" class="control-label col-md-2 info">اضف صورة</label>
    </div>
    <div style="clear: both;"></div>
    
    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fa fa-btn fa-user"></i>اضافة
            </button>
        </div>
    </div>
</form>