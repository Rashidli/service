<div class="profil-left">
    <div class="profil-left-content">
        <ul class="profil-menu list-unstyled">
            <li>
                <a href="{{route('personal')}}">
                    <div class="profil-menu-imgs">
                        <img src="{{asset('front/')}}/assets/css/icons/profil/profile.svg" alt="" class="profil-menu-icon">
                        <img src="{{asset('front/')}}/assets/css/icons/profil/profile-active.svg" alt="" class="profil-menu-icon-active">
                    </div>
                    <span>Şəxsi məlumatlar</span>
                </a>
            </li>
            <li>
                <a href="{{route('adds')}}">
                    <div class="profil-menu-imgs">
                        <img src="{{asset('front/')}}/assets/css/icons/profil/building-4.svg" alt="" class="profil-menu-icon">
                        <img src="{{asset('front/')}}/assets/css/icons/profil/building-4-active.svg" alt="" class="profil-menu-icon-active">
                    </div>
                    <span>Hazırda saytda</span>
                </a>
            </li>
            <li>
                <a href="{{route('pending')}}">
                    <div class="profil-menu-imgs">
                        <img src="{{asset('front/')}}/assets/css/icons/profil/airplane.svg" alt="" class="profil-menu-icon">
                        <img src="{{asset('front/')}}/assets/css/icons/profil/airplane-active.svg" alt="" class="profil-menu-icon-active">
                    </div>
                    <span>Gözləmədə</span>
                </a>
            </li>
            <li>
                <a href="{{route('expired')}}">
                    <div class="profil-menu-imgs">
                        <img src="{{asset('front/')}}/assets/css/icons/profil/profile-2user.svg" alt="" class="profil-menu-icon">
                        <img src="{{asset('front/')}}/assets/css/icons/profil/profile-2user-active.svg" alt="" class="profil-menu-icon-active">
                    </div>
                    <span>Müddəti başa çatmış</span>
                </a>
            </li>
            <li>
                <a href="{{route('main_logout')}}">
                    <div class="profil-menu-imgs">
                        <img src="{{asset('front/')}}/assets/css/icons/login-icon.svg" alt="" class="profil-menu-icon">
                        <img src="{{asset('front/')}}/assets/css/icons/login-icon.svg" alt="" class="profil-menu-icon-active">
                    </div>
                    <span>Çıxış edin</span>
                </a>
            </li>
        </ul>
    </div>
</div>
