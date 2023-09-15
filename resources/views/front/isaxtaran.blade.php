@include('front.includes.header')
<section class="register-content min100vh">

    <div class="register-cover m-auto">
        <h1 class="form-h1 text-center">İş elanı yerləşdirin(iş axtaran)</h1>
    </div>
    <div class="personal-information">
        <form action="{{route('isaxtaran_post')}}" method="post">
            @csrf
            <input type="hidden" value="1" name="add_type">
            <div class="row mlr-16">
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Ad və soyad:</label>
                            <input type="text" class="form-control" id="first-name" name="person_name" value="{{Auth::guard('customer')->user()->name}}">
                            @if($errors->first('person_name')) <small class="form-text text-danger">{{$errors->first('person_name')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Mobil nömrə:</label>
                            <input type="text" class="form-control" id="first-name" name="phone" value="{{Auth::guard('customer')->user()->phone}}">
                            @if($errors->first('phone')) <small class="form-text text-danger">{{$errors->first('phone')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Email:</label>
                            <input type="email" class="form-control" id="first-name" name="email" value="{{Auth::guard('customer')->user()->email}}">
                            @if($errors->first('email')) <small class="form-text text-danger">{{$errors->first('email')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Vəzifə:</label>
                            <input type="text" class="form-control" id="last-name" name="position">
                            @if($errors->first('position')) <small class="form-text text-danger">{{$errors->first('position')}}</small> @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">Cinsi:</label>
                        <div class="position-relative">
                            <select name="gender" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Kişi">Kişi</option>
                                <option value="Qadın">Qadın</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                            @if($errors->first('gender')) <small class="form-text text-danger">{{$errors->first('gender')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">Şəhər:</label>
                        <div class="position-relative">
                            <select name="country" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Bakı">Bakı</option>
                                <option value="Sumqayıt">Sumqayıt</option>
                                <option value="Kürdəmir">Kürdəmir</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                            @if($errors->first('country')) <small class="form-text text-danger">{{$errors->first('country')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">İş təcrübəsi:</label>
                        <div class="position-relative">
                            <select name="experience" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Yoxdur">Yoxdur</option>
                                <option value="0-1 il arası">0-1 il arası</option>
                                <option value="1-3 il arası">1-3 il arası</option>
                                <option value="3-5 il arası">3-5 il arası</option>
                                <option value="5 ildən yuxarı">5 ildən yuxarı</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                            @if($errors->first('experience')) <small class="form-text text-danger">{{$errors->first('experience')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">Maaş:</label>
                        <div class="position-relative">
                            <select name="salary" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Yoxdur">Yoxdur</option>
                                <option value="0-1 il arası">0-500 arası</option>
                                <option value="1-3 il arası">500-1000 arası</option>
                                <option value="3-5 il arası">1000-1500 arası</option>
                                <option value="3-5 il arası">1500-2000 arası</option>
                                <option value="5 ildən yuxarı">2000 dən yuxarı</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                            @if($errors->first('salary')) <small class="form-text text-danger">{{$errors->first('salary')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">Təhil:</label>
                        <div class="position-relative">
                            <select name="education" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Ali">Ali</option>
                                <option value="Natamam ali">Natamam ali</option>
                                <option value="Orta">Orta</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                            @if($errors->first('education')) <small class="form-text text-danger">{{$errors->first('education')}}</small> @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Təhsil ətraflı məlumat:</label>
                            <textarea type="text" class="form-control textarea" id="last-name" name="about_education"></textarea>
                            @if($errors->first('about_education')) <small class="form-text text-danger">{{$errors->first('about_education')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Dil bilikləri:</label>
                            <textarea type="text" class="form-control textarea" id="last-name" name="language_knowledge"></textarea>
                            @if($errors->first('language_knowledge')) <small class="form-text text-danger">{{$errors->first('language_knowledge')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Ətraflı məlumat:</label>
                            <textarea type="text" class="form-control textarea" id="last-name" name="details"></textarea>
                            @if($errors->first('details')) <small class="form-text text-danger">{{$errors->first('details')}}</small> @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 form-col plr-16 col-none"></div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <button type="submit" class="form-btn">Göndər <img src="{{asset('front/')}}/assets/css/icons/arrow-right.svg" alt=""></button>
                </div>
            </div>
        </form>
    </div>
</section>
@include('front.includes.footer')
