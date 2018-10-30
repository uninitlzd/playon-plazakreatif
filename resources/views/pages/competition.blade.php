@extends('layouts.main')

@section('content')
    <div class="main-container" style="padding-left: 50px;">
        <div class="playon-section" data-section-name="home">
            <div class="row h-100">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 justify-content-center event-detail flex-column">
                        <div class="event-detail__greet pr-5">
                            <h1 class="event-detail__title mr-auto">Lomba Menggambar</h1>
                            <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                <li class="d-flex list-inline-item align-self-center event-detail__competition-requirement">
                                    <p class="align-self-center event-detail__competition-requirement__theme">Tema <br> <span>Dolanan</span></p>
                                    <p class="align-self-center event-detail__competition-requirement__age">Batasan Usia <br> <span>TK &mdash; SD</span></p>
                                </li>
                                <li class="align-self-center list-inline-item ml-auto event-detail__time">
                                    21 Des &mdash;<br>10.00
                                </li>
                            </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <ul class="event-detail__competition-requirement__list">
                                <li>lorem ipsum 1</li>
                                <li>lorem ipsum 2</li>
                                <li>lorem ipsum 3</li>
                            </ul>
                            <ul class="list-inline d-flex flex-row align-self-center mt-3">
                                <li class="list-inline-item d-flex align-self-center">
                                    <span class="event-detail__price">Rp30.000,00</span>
                                </li>
                                <li class="list-inline-item ml-auto align-self-center">
                                    <a href="" class="btn btn-green px-5">Daftar</a>
                                </li>
                            </ul>
                            <a href="{{ url('/') }}" class="text-orange-primary mt-5"><i data-feather="arrow-left"></i> Back</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                     style="background: url('{{ asset('images/four.jpg') }}')">
                </div>
            </div>
        </div>
    </div>
@stop
