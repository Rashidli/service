@include('front.includes.header')
<section class="register-content min100vh">

    <div class="register-cover m-auto">
        <h1 class="form-h1 text-center">Məhsul elanı yerlədirin(mehsul axtaran)</h1>
    </div>
    <div class="personal-information">
        <form action="{{route('mehsulaxtaran_post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="3" name="add_type">
            <div class="row mlr-16">
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Müəəssisənin adı/Fiziki şəxs:</label>
                            <input type="text" class="form-control" id="first-name" name="person_name">
                            @if($errors->first('person_name')) <small class="form-text text-danger">{{$errors->first('person_name')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Mobil nömrə:</label>
                            <input type="text" class="form-control" id="first-name" name="phone" value="{{Auth::guard('customer')->user()->phone}}">
                            @if($errors->first('person_name')) <small class="form-text text-danger">{{$errors->first('person_name')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="first-name">Email:</label>
                            <input type="text" class="form-control" id="first-name" name="email" value="{{Auth::guard('customer')->user()->email}}">
                            @if($errors->first('email')) <small class="form-text text-danger">{{$errors->first('email')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Məhsulun adı:</label>
                            <input type="text" class="form-control" id="last-name" name="product_name">
                            @if($errors->first('product_name')) <small class="form-text text-danger">{{$errors->first('product_name')}}</small> @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Məhsulun qiyməti:</label>
                            <input type="text" class="form-control" id="last-name" name="product_price">
                            @if($errors->first('product_price')) <small class="form-text text-danger">{{$errors->first('product_price')}}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element">
                            <label for="last-name">Yerləşdiyi ünvan:</label>
                            <input type="text" class="form-control" id="last-name" name="product_address">
                            @if($errors->first('product_address')) <small class="form-text text-danger">{{$errors->first('product_address')}}</small> @endif
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
                <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
                    <div class="form-element">
                        <div class="form-element upload-file">
                            <label for="upload-picture">Məhsulun şəkli:</label>
                            <div class="position-relative">
                                <span class="upload-txt">Click for upload</span>
                                <input type="file" class="form-control" id="upload-picture" name="product_image">
                                <img src="{{asset('front/')}}/assets/css/icons/upload.svg" alt="" class="upload-icon">
                            </div>
                            @if($errors->first('product_image')) <small class="form-text text-danger">{{$errors->first('product_image')}}</small> @endif
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
