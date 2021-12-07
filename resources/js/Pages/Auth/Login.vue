<template>
<div>
<!--      <div class="d-flex flex-column flex-root" style="height: 100%;margin-bottom: 0">-->
          <!--begin::Login-->
          <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login" style="height: 100%;margin-bottom: 0">
              <!--begin::Aside-->
              <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
                  <!--begin::Aside Top-->
                  <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                      <!--begin::Aside header-->
                      <a href="#" class="text-center mb-10">
                          <img src="assets/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
                      </a>
                      <!--end::Aside header-->
                      <!--begin::Aside title-->
                      <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Discover Amazing Flex Pay
                          <br />Credit Loans</h3>
                      <!--end::Aside title-->
                  </div>
                  <!--end::Aside Top-->
                  <!--begin::Aside Bottom-->
                  <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/svg/illustrations/login-visual-1.svg)"></div>
                  <!--end::Aside Bottom-->
              </div>
              <!--begin::Aside-->
              <!--begin::Content-->
              <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                  <!--begin::Content body-->
                  <div class="d-flex flex-column-fluid flex-center">
                      <!--begin::Signin-->
                      <div class="login-form login-signin">
                          <!--begin::Form-->
                          <form class="form" @submit.prevent="submit">
                              <!--begin::Title-->
                              <div class="pb-13 pt-lg-0 pt-5">
                                  <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to Flex Pay Credit Loans</h3>
                              </div>
                              <!--begin::Title-->
                              <!--begin::Form group-->
                              <div class="form-group">
                                  <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                  <input type="email" v-model="form.email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" required>
                              </div>
                              <!--end::Form group-->
                              <!--begin::Form group-->
                              <div class="form-group">
                                  <div class="d-flex justify-content-between mt-n5">
                                      <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                      <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a>
                                  </div>
                                  <input type="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" v-model="form.password" required>
                              </div>
                              <!--end::Form group-->
                              <!--begin::Action-->
                              <div class="pb-lg-0 pb-5">
                                  <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                              </div>
                              <!--end::Action-->
                          </form>
                          <!--end::Form-->
                      </div>
                      <!--end::Signin-->
                      <!--begin::Signup-->
                      <div class="login-form login-signup">
                          <!--begin::Form-->
                          <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                              <!--begin::Title-->
                              <div class="pb-13 pt-lg-0 pt-5">
                                  <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
                                  <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
                              </div>
                              <!--end::Title-->
                              <!--begin::Form group-->
                              <div class="form-group">
                                  <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="Fullname" name="fullname" autocomplete="off" />
                              </div>
                              <!--end::Form group-->
                              <!--begin::Form group-->
                              <div class="form-group">
                                  <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                              </div>
                              <!--end::Form group-->
                              <!--begin::Form group-->
                              <div class="form-group">
                                  <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Password" name="password" autocomplete="off" />
                              </div>
                              <!--end::Form group-->
                              <!--begin::Form group-->
                              <div class="form-group">
                                  <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
                              </div>
                              <!--end::Form group-->
                              <!--begin::Form group-->
                              <div class="form-group">
                                  <label class="checkbox mb-0">
                                      <input type="checkbox" name="agree" />I Agree the
                                      <a href="#">terms and conditions</a>.
                                      <span></span></label>
                              </div>
                              <!--end::Form group-->
                              <!--begin::Form group-->
                              <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                  <button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                                  <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                              </div>
                              <!--end::Form group-->
                          </form>
                          <!--end::Form-->
                      </div>
                      <!--end::Signup-->
                      <!--begin::Forgot-->
                      <div class="login-form login-forgot">
                          <!--begin::Form-->
                          <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                              <!--begin::Title-->
                              <div class="pb-13 pt-lg-0 pt-5">
                                  <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
                                  <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                              </div>
                              <!--end::Title-->
                              <!--begin::Form group-->
                              <div class="form-group">
                                  <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                              </div>
                              <!--end::Form group-->
                              <!--begin::Form group-->
                              <div class="form-group d-flex flex-wrap pb-lg-0">
                                  <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                                  <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                              </div>
                              <!--end::Form group-->
                          </form>
                          <!--end::Form-->
                      </div>
                      <!--end::Forgot-->
                  </div>
                  <!--end::Content body-->
              </div>
              <!--end::Content-->
          </div>
          <!--end::Login-->
<!--      </div>-->

<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-8">-->
<!--                <div class="card">-->
<!--                    <div class="card-header">Login</div>-->
<!--                    <div class="card-body">-->
<!--                        <form @submit.prevent="submit">-->
<!--&lt;!&ndash;                            @csrf&ndash;&gt;-->

<!--                            <div class="form-group row">-->
<!--                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>-->

<!--                                <div class="col-md-6">-->
<!--                                    <input id="email" type="email" class="form-control"  name="email" value="" required autocomplete="email" autofocus>-->

<!--&lt;!&ndash;                                    @error('email')&ndash;&gt;-->
<!--&lt;!&ndash;                                    <span class="invalid-feedback" role="alert">&ndash;&gt;-->
<!--&lt;!&ndash;                                        <strong>{{ $message }}</strong>&ndash;&gt;-->
<!--&lt;!&ndash;                                    </span>&ndash;&gt;-->
<!--&lt;!&ndash;                                    @enderror&ndash;&gt;-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="form-group row">-->
<!--                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>-->

<!--                                <div class="col-md-6">-->
<!--                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">-->

<!--&lt;!&ndash;                                    @error('password')&ndash;&gt;-->
<!--&lt;!&ndash;                                    <span class="invalid-feedback" role="alert">&ndash;&gt;-->
<!--&lt;!&ndash;                                        <strong>{{ $message }}</strong>&ndash;&gt;-->
<!--&lt;!&ndash;                                    </span>&ndash;&gt;-->
<!--&lt;!&ndash;                                    @enderror&ndash;&gt;-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="form-group row">-->
<!--                                <div class="col-md-6 offset-md-4">-->
<!--                                    <div class="form-check">-->
<!--                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">-->

<!--                                        <label class="form-check-label" for="remember">-->
<!--                                            Remember Me-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="form-group row mb-0">-->
<!--                                <div class="col-md-8 offset-md-4">-->
<!--                                    <button type="submit" class="btn btn-primary">-->
<!--                                        Login-->
<!--                                    </button>-->
<!--                                    <a class="btn btn-link" :href="$route('password.request')">-->
<!--                                        Forgot Your Password?-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
</template>

<script>
export default {
    data(){
      return {
          form:{
              email:'',
              password:''
          }
      }
    },
    methods:{
        submit(){
            this.$inertia.post(route("signin.post",this.form));
        }
    }
}
</script>

<style scoped>
@import "../../../sass/login-1.css";
#app{
    height: 100%;
}
</style>
