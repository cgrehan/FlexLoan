@extends('layouts.app_auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <form role="form" method="POST" action="{{ route('register') }}" id="register">
                       @csrf
                        <div class="panel-body p25 bg-light">
                            <div class="section-divider mt10 mb40">
                                <span>Set up your account</span>
                            </div>

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="section">
                                        <label for="firstname" class="field prepend-icon">
                                            <input type="text" name="first_name" id="firstname" class="gui-input" placeholder="Your First Name *" required>
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>

                                            </label>
                                        </label>
                                    </div>
                                    <div class="section">
                                        <label for="lastname" class="field prepend-icon">
                                            <input type="text" name="last_name" id="lastname" class="gui-input" placeholder="Your Last name *" required>
                                            <label for="lastname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="section">
                                        <label for="password" class="field prepend-icon">
                                            <input type="password" name="password" id="password" class="gui-input" placeholder="Create a password (at least 8 characters) *" required>
                                            <label for="password" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                            </label>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label for="confirmPassword" class="field prepend-icon">
                                            <input type="password" name="password_confirmation" id="confirmPassword" class="gui-input" placeholder="Retype your password *" required>
                                            <label for="confirmPassword" class="field-icon"><i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <label for="email" class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input" placeholder="Your Email Address *" required>
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="section">
                                        <label for="business_name" class="field prepend-icon">
                                            <input type="text" name="business_name" id="business_name" class="gui-input" placeholder="Your business name" value="" required>
                                            <label for="business_name" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="section">
                                        <label for="phone_no" class="field prepend-icon">
                                            <input type="text" name="phone" id="Phone_number" class="gui-input" placeholder="Phone number *" value="" required/>
                                            <label for="phone_no" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                          <span class="input-footer">
We shall send the account activation code to this number.</span>
                                        </label>
                                    </div>
                                    <div class="section mb15">
                                        <small> By clicking <span>Create Account</span> you agree with our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></small>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="panel-footer clearfix">
                            <button type="submit" class="button btn-primary pull-right"><i class="glyphicons glyphicons-list"></i> Create Account &#62;&#62;</button>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection




