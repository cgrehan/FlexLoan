@extends('layouts.app_auth')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="background: repeating-linear-gradient(45deg, black, transparent 100px);">
        <div class="col-md-8">
                    <form role="form" method="POST" action="{{ route('login') }}" id="login">
                        @csrf
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="alert alert-micro alert-system alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    @if ($message = Session::get('success'))
                                      <p> <strong>{{ $message }}</strong></p>
                                    @endif
                                          @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <p class="text-danger"><strong>{{$error}}</strong></p>
                                            @endforeach
                                    @endif
                                    <i class="fa fa-info pr10"></i>
                                    <strong>Info! </strong>
                                    Please login to continue
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 pr30">
                                    <div class="section">
                                        <label for="email" class="field-label text-muted fs18 mb10 hidden">Email</label>
                                        <label for="email" class="field prepend-icon">
                                            <input type="text" id="email" class="gui-input" placeholder="Enter email" name="email" value="">
                                            <label for="email" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label for="username" class="field-label text-muted fs18 mb10 hidden">Password</label>
                                        <label for="password" class="field prepend-icon">
                                            <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
                                            <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="section">
<span>
<a class="btn btn-link" href="{{ route('password.request') }}"> <i class="fa fa-key"> Forgot Your Password?</i></a>
</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="panel-footer clearfix p10 ph15">

                            <button type="submit" class="button btn-primary mr10 pull-right"><i class="fa fa-long-arrow-right"></i> Submit</button>
                            <label class="switch block switch-primary pull-left input-align mt10">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember" data-on="YES" data-off="NO"></label>
                                <span>Remember me</span>
                            </label>
                        </div>

                    </form>
        </div>
    </div>
</div>
@endsection
