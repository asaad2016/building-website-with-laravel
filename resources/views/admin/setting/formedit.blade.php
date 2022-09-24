<form class="" role="form" method="post" action="{{ url('/adminpanal/setting/update/' . $setting->id) }}">
   {{ csrf_field() }}
    <div class="form-group{{ $errors->has('sitename') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="sitename" type="text" class="form-control" name="sitename" value="{{ $setting->sitename }}">

            @if ($errors->has('sitename'))
                <span class="help-block">
                    <strong>{{ $errors->first('sitename') }}</strong>
                </span>
            @endif
        </div>
        <label for="sitename" class="col-md-2 control-label">اسم الموقع</label>
    </div>
    <div class="form-group{{ $errors->has('yt') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="yt" type="text" class="form-control" name="yt" value="{{ $setting->yt }}">

            @if ($errors->has('yt'))
                <span class="help-block">
                    <strong>{{ $errors->first('yt') }}</strong>
                </span>
            @endif
        </div>
        <label for="yt" class="col-md-2 control-label">رابط اليوتيةب الموقع</label>
    </div>
    <div class="form-group{{ $errors->has('fb') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="fb" type="text" class="form-control" name="fb" value="{{ $setting->fb }}">

            @if ($errors->has('fb'))
                <span class="help-block">
                    <strong>{{ $errors->first('fb') }}</strong>
                </span>
            @endif
        </div>
        <label for="fb" class="col-md-2 control-label">رابط الفيسبوك</label>
    </div>
    <div class="form-group{{ $errors->has('tw') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="tw" type="text" class="form-control" name="tw" value="{{ $setting->tw }}">

            @if ($errors->has('tw'))
                <span class="help-block">
                    <strong>{{ $errors->first('tw') }}</strong>
                </span>
            @endif
        </div>
        <label for="tw" class="col-md-2 control-label">رابط تويتر</label>
    </div>

    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="address" type="text" class="form-control" name="address" value="{{ $setting->address }}">

            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>
        <label for="address" class="col-md-2 control-label">العنوان</label>
    </div>
    <div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
    <div class="col-md-10">
            <textarea name="keywords" id="keywords" class="form-control"> {{ $setting->keywords }}</textarea>                                
            @if ($errors->has('keywords'))
                <span class="help-block">
                    <strong>{{ $errors->first('keywords') }}</strong>
                </span>
            @endif
        </div>
        <label for="keywords" class="col-md-2 control-label">الكلمات المفتاحية</label>
    </div>
    <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
        <div class="col-md-10">
             <textarea name="value" id="value" class="form-control"> {{ $setting->value }}</textarea>

            @if ($errors->has('value'))
                <span class="help-block">
                    <strong>{{ $errors->first('value') }}</strong>
                </span>
            @endif
        </div>
        <label for="value" class="col-md-2 control-label">وصف العقار</label>
    </div>

    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="type" type="text" class="form-control" name="type" value="{{ $setting->type }}">

            @if ($errors->has('type'))
                <span class="help-block">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
            @endif
        </div>
        <label for="type" class="col-md-2 control-label">النوع</label>
    </div>
    <div class="form-group" style="margin-top: 30px;">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-lg fa-plus"></i> حفظ
            </button>
        </div>
    </div>
</form>
