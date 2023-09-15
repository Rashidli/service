@include('front.includes.header')
<section class="register-content min100vh d-flex justify-content-center align-items-center">
    <div class="register-cover">
        <h1 class="form-h1 text-center">Register</h1>
        <form action="{{route('main_register_submit')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-items">
                <div class="form-element">
                    <label for="category-participant">Qeydiyyat növü:</label>
                    <div class="position-relative">
                        <select name="user_type" id="category-participant" class="form-control">
                            <option value="" disabled selected>--Seçin--</option>
                            <option value="1">İş axtaran</option>
                            <option value="2">İşçi axtaran</option>
                            <option value="3">Məhsul alan</option>
                            <option value="3">Məhsul satan</option>
                        </select>
                        <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                    </div>
                    @if($errors->first('user_type')) <small class="form-text text-danger">{{$errors->first('user_type')}}</small> @endif
                </div>
                <div class="form-element">
                    <label for="email-reg">Ad və soyad:</label>
                    <input type="text" class="form-control" id="email-reg" name="name">
                </div>
                <div class="form-element">
                    <div class="form-element mobil-number-cover">
                        <label for="mobil-number">Mobil nömrə:</label>
                        <div class="position-relative">
                            <input type="number" class="form-control" id="mobil-number" name="phone">
                            <div class="position-relative number-cover">
                                <select id="phone-number" class="form-control">
                                    <option value="+994" selected>+994</option>
                                </select>
                                <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                            </div>
                        </div>
                        @if($errors->first('phone')) <small class="form-text text-danger">{{$errors->first('phone')}}</small> @endif
                    </div>
                </div>
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
                    @if($errors->first('password')) <small class="form-text text-danger">{{$errors->first('password')}}</small> @endif
                </div>
                <div class="form-element">
                    <div class="form-element upload-file">
                        <label for="upload-picture">Şəkil:</label>
                        <div class="position-relative">
                            <span class="upload-txt">Click for upload</span>
                            <input type="file" class="form-control" id="upload-picture" name="image">
                            <img src="{{asset('front/')}}/assets/css/icons/upload.svg" alt="" class="upload-icon">
                        </div>
                        @if($errors->first('image')) <small class="form-text text-danger">{{$errors->first('image')}}</small> @endif
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <button type="submit" class="form-btn">
                        Qeydiyyatdan keç
                        <img src="{{asset('front/')}}/assets/css/icons/arrow-right.svg" alt="">
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
@include('front.includes.footer')
