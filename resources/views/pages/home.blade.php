@extends('layouts.main')

@section('content')
    <div class="main-container playon-section" data-section-name="home">
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
                    <a href="#" class="col-6 text-center homepage-button__left-button d-flex justify-content-center"><span
                            class="align-self-center text-white">Registrasi Lomba</span></a>
                    <a href="#" class="col-6 text-center homepage-button__left-button d-flex justify-content-center"><span
                            class="align-self-center text-white">Registrasi Workshop</span></a>
                </div>
            </div>
            <div class="col-md-7 h-100 d-flex flex-column right-side-background" style="background: url('{{ asset('images/homepage-bg.png') }}')">
                <div class="d-flex h-100 align-items-end" style="margin-left:31px">
                    <div style="width: 50px; height: 50px; background: #96c43e" class="d-flex justify-content-center">
                        <i data-feather="arrow-right" class="text-white align-self-center" style="width: 20px; height: 20px"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container playon-section" data-section-name="home">
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
                    <a href="#" class="col-6 text-center homepage-button__left-button d-flex justify-content-center"><span
                            class="align-self-center text-white">Registrasi Lomba</span></a>
                    <a href="#" class="col-6 text-center homepage-button__left-button d-flex justify-content-center"><span
                            class="align-self-center text-white">Registrasi Workshop</span></a>
                </div>
            </div>
            <div class="col-md-7 h-100 d-flex flex-column right-side-background" style="background: url('{{ asset('images/homepage-bg.png') }}')">
                <div class="d-flex h-100 align-items-end" style="margin-left:31px">
                    <div style="width: 50px; height: 50px; background: #96c43e" class="d-flex justify-content-center">
                        <i data-feather="arrow-right" class="text-white align-self-center" style="width: 20px; height: 20px"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function() {
            $.scrollify({
                section : ".playon-section",
                sectionName : "section-name"
            });
        });
    </script>
@stop
