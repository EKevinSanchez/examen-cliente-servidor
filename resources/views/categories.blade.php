
@extends('layout.header')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        <a href="#">{{$titulo}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="section-title">
                                        <h4>{{$titulo}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($contenidos as $contenido)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$contenido->imagen}}">
                                    </div>
                                    <div class="product__item__text">
                                        @if ($contenido->bando)
                                            <h5><a href="{{route('detallePersonaje', $contenido->id)}}">{{$contenido->nombre}}</a></h5>
                                        @else
                                            <h5><a href="{{route('detalleComic', $contenido->id)}}">{{$contenido->nombre}}</a></h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
</div>
</div>
</section>
<!-- Product Section End -->
@endsection
