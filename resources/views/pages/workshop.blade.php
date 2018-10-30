@extends('layouts.main')

@section('content')
    <div class="main-container" style="padding-left: 50px;">
        <div class="playon-section" data-section-name="home">
            <div class="row h-100">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 justify-content-center event-detail flex-column">
                        <div class="event-detail__greet pr-5">
                            <h1 class="event-detail__title mr-auto">Pameran Karya</h1>
                            <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                <li class="list-inline-item d-flex align-self-center">
                                    <img src="{{ asset('images/venom.jpg') }}" alt=""
                                                                  class="rounded-circle mr-2" height="50px" width="50px"
                                                                  style="object-fit: cover">
                                </li>
                                <li class="list-inline-item d-flex">
                                    <p class="event-detail__speaker align-self-center">Venom<br>
                                        <span class="event-detail__speaker__detail">Villain from <i>Surabaya</i></span>
                                    </p>
                                </li>
                                <li class="list-inline-item ml-auto event-detail__time">
                                    21 Des &mdash;<br>10.00
                                </li>
                            </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque autem commodi
                                cupiditate, delectus excepturi illo nemo nihil nobis pariatur provident quam quia rem
                                sapiente, suscipit tempore velit veniam voluptas.
                            </p>
                            <ul class="list-inline d-flex flex-row align-self-center mt-3">
                                <li class="list-inline-item d-flex align-self-center">
                                    <span class="event-detail__price">FREE</span>
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
