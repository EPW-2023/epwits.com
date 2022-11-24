@extends('layout.layout')
@section('content')
    <div class="bg-homepage-1">
        <img class="batik-homepage-1" src="{{ asset('img/batik-homepage-1.svg') }}" alt="batik mega mendung lazu">
        <img class="pita-homepage-2" src="{{ asset('img/pita-homepage-1.svg') }}" alt="wave">
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
        {{-- What inside  --}}
        <img class="line-element" src="{{ asset('img/line-element.png') }}" alt="wave line element ">
        <div id="what-inside-section">
            <h2 class="header text-center">
                What's Inside?
            </h2>
            <div class="container body d-flex justify-content-center">
                <a href="#" class="text-decoration-none">
                    <div class="foto-box foto-tf">
                        <div class="inner-text">
                            <h5 class="fw-bold">About TF</h5>
                            <p>Discover more about Teknik Fisika ITS</p>
                        </div>
                    </div>
                </a>
                <a href="https://epc.epwits.org/" class="text-decoration-none">
                    <div class="foto-box foto-epc">
                        <div class="inner-text">
                            <h5 class="fw-bold">EPC</h5>
                            <p>Competition held by Teknik Fisika ITS</p>
                        </div>
                    </div>
                </a>
                <a href="https://injection.epwits.org/" class="text-decoration-none">
                    <div class="foto-box foto-injection">
                        <div class="inner-text">
                            <h5 class="fw-bold">INJECTION</h5>
                            <p>Competition held by Teknik Fisika ITS</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="text-decoration-none">
                    <div class="foto-box foto-merch">
                        <div class="inner-text">
                            <h5 class="fw-bold">Merch</h5>
                            <p>Check out our official merchandise</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {{-- End of What inside --}}
        <div id="event-timeline">
            <h2 class="text-center header">Event Timeline</h2>
            <div class="event-image mt-5 d-flex justify-content-center">
                <img src="{{ asset('img/image-timeline.webp') }}" class="img-fluid image" alt="timeline epw" width="900">
            </div>
        </div>
        <img class="batik-homepage-bawah" src="{{ asset('img/batik-homepage-1.svg') }}" alt="batik mega mendung lazu bawah">
        @include('partials.footer')
    </div>
@endsection
