@include('front.includes.header')
<section class="register-content min100vh d-flex justify-content-center align-items-center">
    <div class="register-cover">
        <h1 class="form-h1 text-center">Login</h1>
        <form action="{{route('main_login_submit')}}" method="post">
            @csrf
            <div class="form-items">
                <div class="form-element">
                    <label for="email-reg">Email:</label>
                    <input type="email" class="form-control" id="email-reg" name="email">
                    @if($errors->first('email')) <small class="form-text text-danger">{{$errors->first('email')}}</small> @endif
                </div>
                <div class="form-element position-relative">
                    <label for="password-reg">Password:</label>
                    <input type="password" class="form-control" id="password-reg" name="password">
                    <button type="button" class="pass-eye">
                        <img src="{{asset('front/')}}/assets/css/icons/eye.svg" alt="" class="eye-icon">
                        <img src="{{asset('front/')}}/assets/css/icons/eye-slash.svg" alt="" class="slash-eye-icon">
                    </button>
{{--                    <span class="password-rules">English letters only, minimum 8 characters</span>--}}
                    @if($errors->first('password')) <small class="form-text text-danger">{{$errors->first('password')}}</small> @endif
                </div>

                <div class="d-flex align-items-center">
                    <button type="submit" class="form-btn">
                        Daxil ol
                        <img src="{{asset('front/')}}/assets/css/icons/arrow-right.svg" alt="">
                    </button>
                </div>
                <br>
                <a href="{{route('main_register')}}" class="password-rules">Qeydiyyatdan keç</a>
            </div>
        </form>
    </div>
</section>
@include('front.includes.footer')
