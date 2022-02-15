@extends('layouts.app_auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="panel-body bg-white p15 pt25">
                            <div class="">
                                <p>Please enter you email address below</p>
                            </div>

                        </div>

                        <div class="panel-footer p25 pv15">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section mn">
                                        <label for="email" class="field-label text-muted fs18 mb10 hidden">Email Address</label>
                                        <div class="smart-widget sm-right smr-80">
                                            <input type="submit" class="button btn-primary mr10 pull-right" value="Submit">
                                            <label for="email" class="field prepend-icon">
                                                <input type="text" name="email" id="email" class="gui-input" placeholder="Enter Your Email Address" value="" required>
                                                <label for="email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                </label>
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
@endsection
