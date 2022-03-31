@extends('layout.header') 

@section('content')
<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <img src="{{$avatar->avatar}}" alt="" class="proc">
                        <h2>Perfil</h2>
                        <p>Bienvenido de vuelta {{$user}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h3 class="title">¿Qué desea hacer?</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="subtitle">Cambiar Foto de perfil</h4>
                            <a href="{{route('selector')}}"><span class="btn-go">Ir</span> <i class="fa fa-angle-right btn-fa"></i></a>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="subtitle">Cambiar Nombre de perfil</h4>
                            <a href="/update"><span class="btn-go">Ir</span> <i class="fa fa-angle-right btn-fa"></i></a>
                        </div>
                    </div>
                </div>  
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection