@extends('layout.header-details')
@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        @if (!$datos->bando)
                        <a href="{{route('comics')}}">{{$titulo}}</a> 
                        @else
                        <a href="{{route('personajes')}}">{{$titulo}}</a>
                        @endif
                        <span>{{$datos->nombre}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="../{{$datos->imagen}}">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{$datos->nombre}}</h3>
                                @if ($datos->bando)
                                    <span>{{$datos->bando}}</span>
                                @endif
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            @if ($datos->sinopsis)
                            <p>{{$datos->sinopsis}}!</p>
                            @else
                            <p>{{$datos->descripcion}}</p>
                            @endif
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Anime Section End -->
@endsection