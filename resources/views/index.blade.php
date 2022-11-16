@extends('layout.layout')
@section('content')
    <div class="bg-homepage-1">
        <img class="batik-homepage-1" src="{{ asset('img/batik-homepage-1.svg') }}" alt="batik mega mendung lazu">
        <img class="pita-homepage-2" src="{{ asset('img/pita-homepage-1.svg') }}" alt="wave">
        <img class="line-element" src="{{ asset('img/line-element.png') }}" alt="wave line element ">
        @include('partials.navbar')
        <div class="container hero-section mt-5 d-flex justify-content-center align-items-center">
            <div>
                <div class="welcometo-text">Welcome to</div>
                <div class="big-text-epw">
                    <div class="eng">Engineering</div>
                    <div class="pw">Physics Week</div>
                </div>
                <div class="year-2023">2023</div>
            </div>
            <div>
                <img src="{{ asset('img/city-homepage.svg') }}" alt="city future mantap jiwa" width="500">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <a href="#theme-section" class="d-flex align-items-center gap-2 explore-cta  btn btn-primary">Explore More <i
                    class="fa-solid fa-arrow-down"></i></a>
        </div>
        <div id="theme-section" class="pt-5">
            <div class="mx-auto first-theme d-flex justify-content-start">
                <div class="text-center d-flex align-items-start">
                    <span class="the me-2">“The</span> Implementation <span class="the mx-2">Of</span> Technology
                </div>
            </div>
            <div class="mx-auto second-theme d-flex justify-content-end">
                <div class="text-center d-flex align-items-start">
                    <span class="towards me-2">towards</span> Cultural Sustainability"
                </div>
            </div>
        </div>
        {{-- EPW Adalah --}}
        <div id="epw-adalah-section">
            <div class="container">
                <h2 class="header">EPW adalah</h2>
                <p class="body">EPW sebagai media pengenalan Teknik Fisika secara umum, keilmuan, keprofesian, dan
                    perkuliahan (prestasi,
                    lingkungan, dan sekitarnya) terhadap masyarakat umum, siswa calon mahasiswa baru, dan siswa SMA secara
                    umum.</p>
            </div>
        </div>
        {{-- End of EPW Adalah --}}
        <div id="what-inside-section">
            <h2 class="header text-center">
                What's Inside?
            </h2>
            <div class="container body d-flex justify-content-center">
                <div class="foto-tf"></div>
                <div class="foto-epc"></div>
                <div class="foto-injection"></div>
                <div class="foto-merch"></div>
            </div>
        </div>
    </div>
@endsection
