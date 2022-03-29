@extends('layouts.main')

@section('content')
<div id="home-cover">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-7">
                <div class="row mb-2">
                    <div class="col-sm-12 col-lg-9 mx-start">
                        <p class="title">Aplikasi Wirausaha Untuk Bisnis Kuliner Anda </p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-11 col-lg-8">
                        <p class="text">Rasakan operasional yang jauh lebih mudah, jangkauan yang semakin luas dan pertumbuhan bisnis yang semakin pesat. Atur dalam hitungan menit, jual dalam hitungan detik, kompatibel dengan perangkat apapun. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col home-button">
                        <a class="btn btn-danger me-3" href="#app-platform">Mulai</a>
                        <a class="btn btn-outline-dark android" href="#app-platform"><i class='bx bxl-android'></i> Download Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="app-mockup ms-lg-5">
                    <img class="home-ui" src="/img/mockup.png" alt="Indonesian Resto Guide App">
                </div>
            </div>
        </div>
    </div>
</div>
@include('elements.service')
@include('elements.feature')
@include('elements.price')
@include('elements.download')
@endsection