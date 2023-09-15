@include('front.includes.header')
<section class="register-content min100vh">

    <div class="register-cover m-auto">
        <h1 class="form-h1 text-center">İş elanı yerləşdirin(iş axtaran)</h1>
    </div>
    <div class="personal-information">
        <form action="">
            <div class="row mlr-16">

                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Müəəssisənin adı:</label>
                            <input type="text" class="form-control" id="first-name" name="first-name">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Mobil nömrə:</label>
                            <input type="text" class="form-control" id="first-name" name="first-name">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Email:</label>
                            <input type="text" class="form-control" id="first-name" name="first-name">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Vəzifə:</label>
                            <input type="text" class="form-control" id="last-name" name="last-name">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">Cinsi:</label>
                        <div class="position-relative">
                            <select name="category-participant" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Country1">Kişi</option>
                                <option value="Country2">Qadın</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">Şəhər:</label>
                        <div class="position-relative">
                            <select name="category-participant" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Country1">Bakı</option>
                                <option value="Country2">Sumqayıt</option>
                                <option value="Country3">Kürdəmir</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">İş təcrübəsi:</label>
                        <div class="position-relative">
                            <select name="category-participant" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Country1">Yoxdur</option>
                                <option value="Country2">0-1 il arası</option>
                                <option value="Country3">1-3 il arası</option>
                                <option value="Country3">3-5 il arası</option>
                                <option value="Country3">5 ildən yuxarı</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <label for="category-participant">Təhil:</label>
                        <div class="position-relative">
                            <select name="category-participant" id="category-participant" class="form-control">
                                <option value="" selected disabled>--Seçin--</option>
                                <option value="Country1">Ali</option>
                                <option value="Country2">Natamam ali</option>
                                <option value="Country3">Orta</option>
                            </select>
                            <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Namizədə tələblər:</label>
                            <textarea type="text" class="form-control textarea" id="last-name" name="last-name"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">İş barədə məlumat:</label>
                            <textarea type="text" class="form-control textarea" id="last-name" name="last-name"></textarea>
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
