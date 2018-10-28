@extends('layouts.main')

@section('content')
    <div class="main-container" >
        <div class="playon-section" data-section-name="home">
            <div class="row h-100">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 align-items-center justify-content-center hero flex-column">
                        <img src="{{ asset('images/playon-logo.png') }}" class="hero__logo mx-auto mb-5" alt="">
                        <div class="hero__greet">
                            <h2 class="hero__greet__title mr-auto">Pameran Karya</h2>
                            <h2 class="hero__greet__campus mr-auto">Akhir Semester ke-13 DKV UPN Jawa Timur</h2>
                            <div class="d-flex flex-row">
                                <div>
                                    <h2 class="hero__greet__date">21-23</h2>
                                </div>
                                <div style="margin-left: 10px">
                                    <h2 class="hero__greet__month">Desember 2018</h2>
                                    <h2 class="hero__greet__place">Ciputra Mall World</h2>
                                    <a href="#" class="hero__greet__maps-link">Lihat Peta <i data-feather="arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end w-100 flex-row homepage-button__left-button-wrapper">
                        <a href="#"
                           class="col-6 text-center homepage-button__left-button d-flex justify-content-center"><span
                                class="align-self-center text-white">Registrasi Lomba</span></a>
                        <a href="#"
                           class="col-6 text-center homepage-button__left-button d-flex justify-content-center"><span
                                class="align-self-center text-white">Registrasi Workshop</span></a>
                    </div>
                </div>
                <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                     style="background: url('{{ asset('images/homepage-bg.png') }}')">
                    <div class="d-flex h-100 align-items-end" style="margin-left:31px">
                        <div style="width: 50px; height: 50px; background: #96c43e" class="d-flex justify-content-center">
                            <i data-feather="arrow-right" class="text-white align-self-center"
                               style="width: 20px; height: 20px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container playon-section" data-section-name="about" style="padding-left: 52px">
        <div class="playon-section" data-section-name="tentang">
            <div class="row h-100">
                <div class="col-md-6 h-100 d-flex flex-column align-self-center justify-content-center">
                    <img src="{{ asset('images/playon-mozaik.png') }}" class="img-fluid align-self-center" alt="">
                </div>
                <div class="col-md-6 h-100 d-flex flex-column justify-content-center">
                    <div class="tentang__content">
                        <h1 class="w-25 tentang__content__title shadowed-text" name="Tentang Playon">Tentang Playon</h1>
                        <p class="w-75 tentang__content__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus aliquid autem eos et eum, impedit
                            iusto laboriosam odio omnis porro, quam quibusdam ratione recusandae repudiandae saepe tenetur
                            vero
                            vitae voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At atque aut,
                            consequuntur cumque dicta dolor ea est exercitationem explicabo harum illo magni minus odio
                            perspiciatis placeat repellat similique vel velit.</p>
                        <p class="vertical-text__scroll-down">Scroll Down <i data-feather="arrow-down"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container" sticky-container data-section-name="about" style="padding-left: 52px">
        <ragam-acara></ragam-acara>
    </div>
@stop

@section('scripts')
    {{--<script>--}}
        {{--$(function () {--}}
            {{--$.scrollify({--}}
                {{--section: ".playon-section",--}}
                {{--sectionName: "section-name",--}}
                {{--scrollbars: false,--}}
                {{--touchScroll: true,--}}
                {{--easing: "easeOutExpo",--}}
                {{--scrollSpeed: 2000,--}}

            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    <script>
        if ('serviceWorker' in navigator ) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
    </script>
@stop
