@extends('layouts.users')

@section('content')
    <div id="container">

        <div class="container">

            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="login.html">حساب کاربری</a></li>
                <li><a href="login.html">ورود</a></li>
            </ul>
            <div class="row">
                @include('frontend.users.notification')
                @include('frontend.partials.errors')
                <div id="content" class="col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">ورود</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{route(
                            'frontend.users.login')}}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">آدرس ایمیل</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">رمز عبور</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                               required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : ''}}> مرا به
                                                خاطر بسپار
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-success">
                                            ورود
                                        </button>

                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                            فراموشی رمز عبور؟
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <aside id="column-right" class="col-sm-3 hidden-xs">
                    <h3 class="subtitle">حساب کاربری</h3>
                    <div class="list-group">
                        <ul class="list-item">
                            <li><a href="login.html">ورود</a></li>
                            <li><a href="register.html">ثبت نام</a></li>
                            <li><a href="#">فراموشی رمز عبور</a></li>
                            <li><a href="#">حساب کاربری</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
