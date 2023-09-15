@include('front.includes.header')
<section class="profil-content min100vh">
    <div class="fixed-profil-bg"></div>
    <div class="container">
        <div class="profil-cover mlr-16">
            @include('front.includes.profile_sidebar')
            <div class="profil-right">
                <div class="profil-right-content profil-right-mobile">
                    <div class="profil-top">
                        <div class="profil-top-left">
                            <h1 class="profil-h1">Şəxsi məlumatlar</h1>
                        </div>
                    </div>
                    <div class="personal-information">
                        @if(session('message'))
                            <div class="alert alert-success">{{session('message')}}</div>
                        @endif
                        <form action="{{route('profile_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mlr-16">
                                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                                    <div class="form-element">
                                        <label for="category-participant">Qeydiyyat növü:</label>
                                        <div class="position-relative">
                                            <select name="user_type" id="category-participant" class="form-control">
                                                <option value="" disabled selected>--Seçin--</option>
                                                <option value="1" {{$customer->user_type == 1 ? 'selected' : ''}}>İş axtaran</option>
                                                <option value="2"{{$customer->user_type == 2 ? 'selected' : ''}}>İşçi axtaran</option>
                                                <option value="3" {{$customer->user_type == 3 ? 'selected' : ''}}>Məhsul alan</option>
                                                <option value="4" {{$customer->user_type == 4 ? 'selected' : ''}}>Məhsul satan</option>
                                            </select>
                                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                                        </div>
                                        @if($errors->first('user_type')) <small class="form-text text-danger">{{$errors->first('user_type')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                                    <div class="form-element">
                                        <label for="email-reg">Ad:</label>
                                        <input type="text" class="form-control" id="email-reg" value="{{$customer->name}}" name="name">
                                        @if($errors->first('name')) <small class="form-text text-danger">{{$errors->first('name')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                                    <div class="form-element">
                                        <div class="form-element mobil-number-cover">
                                            <label for="mobil-number">Mobil nömrə:</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" id="mobil-number" name="phone" value="{{$customer->phone}}">
                                                <div class="position-relative number-cover">
                                                    <select  id="phone-number" class="form-control" >
                                                        <option value="+994" selected>+994</option>
                                                    </select>
                                                    <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                                                </div>
                                            </div>
                                            @if($errors->first('phone')) <small class="form-text text-danger">{{$errors->first('phone')}}</small> @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                                    <div class="form-element">
                                        <label for="email-reg">Email:</label>
                                        <input type="email" class="form-control" id="email-reg" name="email" value="{{$customer->email}}">
                                        @if($errors->first('email')) <small class="form-text text-danger">{{$errors->first('email')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                                    <div class="form-element position-relative">
                                        <label for="password-reg">Password:</label>
                                        <input type="password" class="form-control" id="password-reg" name="password">
                                        <button type="button" class="pass-eye">
                                            <img src="{{asset('front/')}}/assets/css/icons/eye.svg" alt="" class="eye-icon">
                                            <img src="{{asset('front/')}}/assets/css/icons/eye-slash.svg" alt="" class="slash-eye-icon">
                                        </button>
{{--                                        <span class="password-rules">English letters only, minimum 8 characters</span>--}}
                                        @if($errors->first('password')) <small class="form-text text-danger">{{$errors->first('password')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                                    <div class="form-element">

                                        <div class="form-element upload-file">
                                            <label for="upload-picture">Şəkil:</label>
                                            <div class="position-relative">
                                                <span class="upload-txt">Click for upload</span>
                                                <input type="file" class="form-control" id="upload-picture" name="image">
                                                <img src="{{asset('front/')}}/assets/css/icons/upload.svg" alt="" class="upload-icon">
                                            </div>
                                            <a href="{{asset('storage/' .$customer->image)}}" >Şəkil</a>
                                        </div>
                                        @if($errors->first('image')) <small class="form-text text-danger">{{$errors->first('image')}}</small> @endif
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-col plr-16 col-none"></div>
                                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                                    <div class="d-flex align-items-center">
                                        <button type="submit" class="form-btn">
                                            Yenilə
                                            <img src="{{asset('front/')}}/assets/css/icons/arrow-right.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@include('front.includes.footer')
