@foreach($adds as $add)
    @if($add->add_type == 1)
        <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
            <div class="document-item position-relative">
                <div class="doc-top d-flex justify-content-start">
                    <img src="{{asset('front/')}}/assets/css/icons/user.png" alt="" class="doc-top-img">
                    <div class="doc-right">
                        <p class="doc-p">{{$add->position}}</p>
                        <ul class="list-unstyled mb-0">
                            <li><span>{{$add->country}}</span></li>
                            <li><span>{{$add->salary}} AZN</span></li>
                            <li><span>{{ $add->created_at->format('d.m.Y') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="doc-info">
                    <button type="button" class="doc-download d-flex align-items-center justify-content-center">
                        <span>Ətraflı</span>
                        <img src="{{asset('front/' . Auth::guard('customer')->user()->image)}}" alt="">
                    </button>
                    <div class="doc-bottom">
                        <div class="doc-txt">
                            {{$add->person_name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif($add->add_type == 2)
        <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
            <div class="document-item position-relative">
                <div class="doc-top d-flex justify-content-start">
                    <img src="{{asset('front/' . Auth::guard('customer')->user()->image)}}" alt="" class="doc-top-img">
                    <div class="doc-right">
                        <p class="doc-p">{{$add->position}}</p>
                        <ul class="list-unstyled mb-0">
                            <li><span>{{$add->country}}</span></li>
                            <li><span>{{$add->salary}} AZN</span></li>
                            <li><span>{{ $add->created_at->format('d.m.Y') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="doc-info">
                    <button type="button" class="doc-download d-flex align-items-center justify-content-center">
                        <span>Ətraflı</span>
                        <img src="{{asset('front/')}}/assets/css/icons/next-pag.svg" alt="">
                    </button>
                    <div class="doc-bottom">
                        <div class="doc-txt">
                            {{$add->company_name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif($add->add_type == 3)
        <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
            <div class="document-item position-relative">
                <div class="doc-top d-flex justify-content-start">
                    <img src="{{asset('front/' . $add->product_image)}}" alt="" class="doc-top-img">
                    <div class="doc-right">
                        <p class="doc-p">{{$add->product_name}}</p>
                        <ul class="list-unstyled mb-0">
                            <li><span>{{$add->country}}</span></li>
                            <li><span>{{$add->product_price}} AZN</span></li>
                            <li><span>{{ $add->created_at->format('d.m.Y') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="doc-info">
                    <button type="button" class="doc-download d-flex align-items-center justify-content-center">
                        <span>Ətraflı</span>
                        <img src="{{asset('front/')}}/assets/css/icons/next-pag.svg" alt="">
                    </button>
                    <div class="doc-bottom">
                        <div class="doc-txt">
                            {{$add->person_name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif($add->add_type == 4)
        <div class="col-12 col-sm-12 col-md-6 form-col plr-16">
            <div class="document-item position-relative">
                <div class="doc-top d-flex justify-content-start">
                    <img src="{{asset('storage/' . $add->product_image)}}" alt="" class="doc-top-img">
                    <div class="doc-right">
                        <p class="doc-p">{{$add->product_name}}</p>
                        <ul class="list-unstyled mb-0">
                            <li><span>{{$add->country}}</span></li>
                            <li><span>{{$add->product_price}} AZN</span></li>
                            <li><span>{{ $add->created_at->format('d.m.Y') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="doc-info">
                    <button type="button" class="doc-download d-flex align-items-center justify-content-center">
                        <span>Ətraflı</span>
                        <img src="{{asset('front/')}}/assets/css/icons/next-pag.svg" alt="">
                    </button>
                    <div class="doc-bottom">
                        <div class="doc-txt">
                            {{$add->company_name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
