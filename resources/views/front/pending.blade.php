@include('front.includes.header')
<section class="profil-content min100vh">
    <div class="fixed-profil-bg"></div>
    <div class="container">
        <div class="profil-cover mlr-16">
            @include('front.includes.profile_sidebar')
            <div class="profil-right">
                <div class="profil-right-content profil-right-mobile">
                    @if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <div class="profil-top">
                        <div class="profil-top-left">
                            <h1 class="profil-h1">Təsdiqləmədə</h1>
                        </div>
                    </div>
                    <div class="personal-information">
                        <div class="row mlr-16">

                            @include('front.includes.add')

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@include('front.includes.footer')
