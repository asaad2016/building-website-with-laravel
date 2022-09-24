<form class="" role="form" method="POST" action="{{ url('/adminpanal/user/update/' . $user->id) }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="name" type="text" class="form-control" name="name"  value="{{ $user->name }}">

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <label for="name" class="col-md-2 control-label">الاسم</label>
    </div>
    @if($user->admin == 1)
    <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
        <div class="col-md-10" style="margin-bottom: 20px;margin-top: 20px">
            <select name="admin" class="form-control" id="admin">
                <option value="0"
                 {{ ($user->admin==0) ? 'selected' : '' }}>
                 User
                
                 </option>
               <option value="1"
                 {{ ($user->admin==1) ? 'selected' : '' }} >
                 Admin

                 </option>
                 <option value="2"
                {{ ($user->admin==2) ? 'selected' : '' }} >
                 Member
                 </option>

                    
                
            </select>

            @if ($errors->has('admin'))
                <span class="help-block">
                    <strong>{{ $errors->first('admin') }}</strong>
                </span>
            @endif
        </div>
      
        <label for="admin" class="col-md-2 control-label" style="margin-bottom: 20px;margin-top: 20px">الصلاحيات</label>
    </div>
    @endif
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-10">
            <input id="email" type="email" class="form-control" name="email"  value="{{ $user->email }}">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <label for="email" class="col-md-2 control-label">الايميل</label>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> تحديث
            </button>
        </div>
    </div>
</form>