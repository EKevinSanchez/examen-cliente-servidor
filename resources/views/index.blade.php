
@extends('layout.header')

@section('content')
<!-- Hero Section Begin -->
<section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/I-WANT-YOU.png">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Warning!</div>
                                <h2>I want you for X-Force</h2>
                                <p>Unete al mejor equipo de superheroes y antiheroes</p>
                                <a href="#"><span>Mas informacion</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/x-force.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Conoce a los integrantes de este gran equipo</h2>
                                <p>Heroes, antiheroes y supervillanos</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/pelicula.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Conoce las peliculas</h2>
                                <p>Donde aparecen algunos de los integrantes del equipo</p>
                                <a href="{{route('movie')}}"><span>Conocer mas</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Integrantes del equipo</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="{{route('personajes')}}" class="primary-btn">Ver Todos <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($personajes as $personaje) 
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="{{$personaje->imagen}}">
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>{{$personaje->bando}}</li>
                                            </ul>
                                            <h5><a href="{{route('detallePersonaje', $personaje->id)}}">{{$personaje->nombre}}</a></h5>
                                        </div>
                                    </div>
                                </div>
                                @if ($personaje->id == 3)
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Comics Relacionados</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="{{route('comics')}}" class="primary-btn">Ver Todos <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($comics as $comic)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$comic->imagen}}">
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="{{route('detalleComic', $comic->id)}}">{{$comic->nombre}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Sugerencias</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*"></li>
                            </ul>
                            <div class="filter__gallery">
                                @php
                                    $random = $personajes->random(4);
                                @endphp
                                @foreach ($random as $personaje)
                                    <div class="filter__gallery">
                                    <div class="product__sidebar__view__item set-bg mix {{$personaje->bando}}"
                                    data-setbg="{{$personaje->imagen}}">
                                    <div class="view">{{$personaje->bando}}</div>
                                    <h5><a href="#">{{$personaje->nombre}}</a></h5>
                                </div>
                                @endforeach
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->
@endsection