@include('front.includes.header')
<section class="home-content min90vh">
    <div class="container">
        <div class="top_heading">
            <h2 class="lap_heading">VIP vakansiyalar</h2>
        </div>
        <hr>
        <br>
        <p>Axtarış</p>
        <div class="row">
            <div class="col-12 col-sm-4 col-md-3 form-col plr-16">
                <div class="form-element">
                    <label for="category-participant">Kateqoriya:</label>
                    <div class="position-relative">
                        <select name="category-participant" id="category-participant" class="form-control">
                            <option value="Category1">Bütün kateqoriyalar</option>
                            <option value="Category1">Mətbəx</option>
                            <option value="Category2">Təmizlik</option>
                            <option value="Category3">Xidmət</option>
                        </select>
                        <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-3 form-col plr-16">
                <div class="form-element">
                    <label for="category-participant">Şəhər:</label>
                    <div class="position-relative">
                        <select name="category-participant" id="category-participant" class="form-control">
                            <option value="Category1">Bütün şəhərlər</option>
                            <option value="Category1">Bakı</option>
                            <option value="Category2">Sumqayıt</option>
                            <option value="Category3">Kürdəmir</option>
                        </select>
                        <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-3 form-col plr-16">
                <div class="form-element">
                    <label for="category-participant">Əmək haqqı:</label>
                    <div class="position-relative">
                        <select name="category-participant" id="category-participant" class="form-control">
                            <option value="Category1">Vacib deyil</option>
                            <option value="Category1">minimum 100 AZN</option>
                            <option value="Category1">minimum 200 AZN</option>
                            <option value="Category1">minimum 500 AZN</option>
                            <option value="Category1">minimum 1500 AZN</option>
                        </select>
                        <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-3 form-col plr-16">
                <div class="form-element">
                    <label for="category-participant">İş təcrübəsi:</label>
                    <div class="position-relative">
                        <select name="category-participant" id="category-participant" class="form-control">
                            <option value="Category1">Vacib deyil</option>
                            <option value="Category2">1 ildən aşağı</option>
                            <option value="Category3">1 ildən 3 ilə qədər</option>
                            <option value="Category3">3 ildən 5 ilə qədər</option>
                            <option value="Category3">5 ildən artıq</option>
                        </select>
                        <img src="{{asset('front/')}}/assets/css/icons/chevron-down-bold.svg" alt="" class="chevron-icon">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-3 form-col plr-16">
                <button type="submit" class="form-btn">Axtar <img src="{{asset('front/')}}/assets/css/icons/arrow-right.svg" alt=""></button>
            </div>
        </div>
        <br>
        <br>
        <div class="row mlr-8">
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <div class="for_flex">
                                <p class="doc-p">Baş aşbaz</p>
                                <p class="doc-p red_color">VIP</p>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <div class="for_flex">
                                <p class="doc-p">Baş aşbaz</p>
                                <p class="doc-p red_color">Premium</p>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="document-item position-relative">
                    <div class="doc-top d-flex justify-content-start">
                        <img src="{{asset('front/')}}/assets/css/icons/cooking.png" alt="" class="doc-top-img">
                        <div class="doc-right">
                            <p class="doc-p">Baş aşbaz</p>
                            <ul class="list-unstyled mb-0">
                                <li><span>Bakı</span></li>
                                <li><span>500 AZN</span></li>
                                <li><span>14.03.23</span></li>
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
                                Hilton Hotel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-pagination position-relative">
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0 justify-content-center align-items-center">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8337 10H4.16699M4.16699 10L10.0003 15.8333M4.16699 10L10.0003 4.16667" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">9</a></li>
                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span>Next</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16699 10H15.8337M15.8337 10L10.0003 4.16667M15.8337 10L10.0003 15.8333" stroke="#667085" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
@include('front.includes.footer')
