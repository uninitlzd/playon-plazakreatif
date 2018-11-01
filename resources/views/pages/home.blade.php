@extends('layouts.main')

@section('content')
    <div class="main-container" id="home">
        <div class="playon-section" data-section-name="home">
            <div class="row h-100">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 align-items-center justify-content-center hero flex-column">
                        <img src="{{ asset('images/playon-logo.png') }}" class="hero__logo mx-auto mb-5 w-75" alt="">
                        <div class="hero__greet">
                            <h2 class="hero__greet__title mr-auto">Pameran Karya</h2>
                            <h2 class="hero__greet__campus mr-auto">Akhir Semester ke-13 DKV UPN Jawa Timur</h2>
                            <div class="d-flex flex-row">
                                <div>
                                    <h2 class="hero__greet__date">21&mdash;23</h2>
                                </div>
                                <div style="margin-left: 10px">
                                    <h2 class="hero__greet__month">Desember 2018</h2>
                                    <h2 class="hero__greet__place">Ciputra Mall World</h2>
                                    <a href="#" class="hero__greet__maps-link">Lihat Peta <i
                                            data-feather="arrow-right"></i></a>
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
                    <div class="d-flex h-100 align-items-end homepage-button__right-button-wrapper">
                        <a href="#"
                           class="col-6 text-center homepage-button__left-button d-flex justify-content-center"><span
                                class="align-self-center text-white">Registrasi Lomba</span></a>
                        <a href="#"
                           class="col-6 text-center homepage-button__left-button d-flex justify-content-center"><span
                                class="align-self-center text-white">Registrasi Workshop</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container" data-section-name="about" id="tentang" style="padding-left: 52px">
        <div class="playon-section">
            <div class="row h-100">
                <div
                    class="col-md-6 col-xs-0 h-100 d-flex flex-column align-self-center justify-content-center tentang__left-side">
                    <img src="{{ asset('images/playon-mozaik.png') }}" class="img-fluid align-self-center" alt="">
                </div>
                <div class="col-md-6 h-100 d-flex flex-column justify-content-center">
                    <div class="tentang__content">
                        <h1 class="w-25 tentang__content__title shadowed-text" name="Tentang Playon">Tentang Playon</h1>
                        <p class="w-75 tentang__content__text">Plaza Kreatif 13 berjudul “Playon” yang diambil dari
                            salah satu bahasa
                            jawa yang berarti berlarian. “Playon” sendiri merupakan salah satu kegiatan
                            bermain yang paling sering dilakukan oleh anak-anak. “Playon” merupakan salah
                            satu kalimat yang mewakili dari gambaran sebuah permainan dan “Playon”
                            merupakan permainan yang mengasyikan serta selalu memberikan kesan yang
                            paling menyenangkan bagi anak-anak ketika bermain bersama. Sama seperti
                            sebuah permainan, suatu desain juga ingin memberikan dan meninggalkan
                            sebuah kesan yang selalu melekat bagi yang menikmatinya, seperti karya-karya
                            yang dihasilkan oleh mahasiswa DKV UPN. Serta dengan dipilihnya kata “Playon”
                            sebagai judul Plaza Kreatif 13 , maka Plaza Kreatif 13 mampu dijadikan tempat
                            bermain, berkumpul, dan bertemu bersama untuk memberikan kesan yang
                            menyenangkan dan berkesan bagi seluruh penikmatnya.</p>
                        <p class="vertical-text__scroll-down col-xs-0">Scroll Down <i data-feather="arrow-down"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container" sticky-container style="padding-left: 0px">
        <ragam-acara></ragam-acara>
    </div>
    <div class="main-container" style="padding-left: 52px" id="timeline">
        <div class="playon-section" data-section-name="tentang">
            <div class="row h-100">
                <div class="col-md-6 h-100 d-flex flex-column">
                    <timeline-acara></timeline-acara>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container" style="padding-left: 52px" id="sponsors">
        <div class="playon-section" data-section-name="tentang">
            <div class="row h-100">
                <div class="col-md-12 h-100 d-flex flex-column">
                    <div class="sponsors__content mb-5">
                        <h1 class="sponsors__content__title shadowed-text" name="Sponsors">Sponsors</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <div class="aspectRatioSizer mx-2" style="border: 2px solid orange;">
                                <svg viewBox="0 0 1 1"></svg>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="aspectRatioSizer mx-2" style="border: 2px solid orange;">
                                <svg viewBox="0 0 1 1"></svg>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="aspectRatioSizer mx-2" style="border: 2px solid orange;">
                                <svg viewBox="0 0 1 1"></svg>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="aspectRatioSizer mx-2" style="border: 2px solid orange;">
                                <svg viewBox="0 0 1 1"></svg>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="aspectRatioSizer mx-2" style="border: 2px solid orange;">
                                <svg viewBox="0 0 1 1"></svg>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="aspectRatioSizer mx-2" style="border: 2px solid orange;">
                                <svg viewBox="0 0 1 1"></svg>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="aspectRatioSizer mx-2" style="border: 2px solid orange;">
                                <svg viewBox="0 0 1 1"></svg>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="aspectRatioSizer mx-2" style="border: 2px solid orange;">
                                <svg viewBox="0 0 1 1"></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('/service-worker.js').then(function (registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function (err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
    </script>
@stop
