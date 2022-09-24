@extends('layouts.app')
@section('title')
    صفحة تسجيل الدخول
@endsection

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 25px">صفحة الدخول</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-2 control-label">الايميل</label>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <label for="password" class="col-md-2 control-label">كلمة المرور</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                  <label for="remember" class="control-label">تذكرني</label>
                                <label>
                                    <input id="remember" type="checkbox" name="remember"> 
                                </label>
                            </div>
                           
                        </div>

                        <div class="form-group text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> دخول
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">هل نسيت كلمة المرور ؟</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
