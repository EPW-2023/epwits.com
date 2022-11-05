<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="EPW sebagai media pengenalan Teknik Fisika secara umum, keilmuan, keprofesian, dan perkuliahan (prestasi, lingkungan, dan sekitarnya) terhadap masyarakat umum, siswa calon mahasiswa baru, dan siswa SMA secara umum. EPW memberikan motivasi terhadap siswa sma untuk berkuliah dan menjadikan Teknik Fisika sebagai pilihan. EPW memberikan dampak tidak hanya pada peningkatan peminat Teknik Fisika, tetapi juga memberikan dampak bagi lingkungan sekitar." />
    <meta name="author" content="EPW 2023" />
    <meta name="keywords"
        content="EPW,epw,EPW ITS, epw its, EPW ITS 2023, epw its 2023, teknik fisika, teknik fisika its, Surabaya, Jawa Timur" />
    <meta name="robots" content="index,follow" />
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/epw-favicon.png') }}" type="image/x-icon">
    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EPW 2023</title>
</head>

<body>


    @yield('content')



    @include('partials.js')
</body>

</html>
