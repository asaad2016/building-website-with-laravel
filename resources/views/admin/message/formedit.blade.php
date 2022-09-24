<form class="" role="form" method="POST" action="{{ url('/adminpanal/message/update/' . $message->id) }}">
    {{ csrf_field() }}

    <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $message->firstname }}">

            @if ($errors->has('firstname'))
                <span class="help-block">
                    <strong>{{ $errors->first('firstname') }}</strong>
                </span>
            @endif
        </div>
        <label for="firstname" class="col-md-2 control-label">الاسم الاول</label>
    </div>

    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="text" type="lastname" class="form-control" name="lastname" value="{{ $message->lastname }}">

            @if ($errors->has('lastname'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif
        </div>
        <label for="lastname" class="col-md-2 control-label">الاسم الاخير</label>
    </div>
    <div class="form-group">
        <div class="col-md-10">
            <input id="email" type="email" class="form-control" name="email" value="{{ $message->email }}">
        </div>
        <label for="email" class="col-md-2 control-label">الايميل</label>
    </div>

    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <select class="form-control" id="subject" name="subject">

                <option value="الخدمات" @if($message->subject =='الخدمات') {{ 'selected'}} @else {{ '' }} @endif >
                    الخدمات
                </option>

                <option value="الاقترحات" @if($message->subject =='الاقترحات') {{ 'selected'}} @else {{ '' }} @endif>
                    الاقترحات
                </option>

                <option value="غير ذلك" @if($message->subject =='غير ذلك') {{ 'selected'}} @else {{ '' }} @endif>
                   غير ذلك
                </option>
            </select>

            @if ($errors->has('subject'))
                <span class="help-block">
                    <strong>{{ $errors->first('subject') }}</strong>
                </span>
            @endif
        </div>
        <label for="subject" class="col-md-2 control-label">موضوع الرسالة</label>
    </div>

    <div class="form-group{{ $errors->has('bodymsg') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <textarea id="bodymsg"  class="form-control" name="bodymsg" cols="5" rows="5">{{ $message->bodymsg }}</textarea> 
            @if ($errors->has('bodymsg'))
                <span class="help-block">
                    <strong>{{ $errors->first('bodymsg') }}</strong>
                </span>
            @endif
        </div>
        <label for="bodymsg" class="col-md-2 control-label">نص الرسالة</label>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> تعديل
            </button>
        </div>
    </div>
</form>