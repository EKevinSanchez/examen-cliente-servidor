@extends('layout.header')

@section('content')

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__title">
                        <h6>{{$titulo}} <span>- {{$date}}</span></h6>
                        <h2>{{$titulo}} donde salen algunos integrantes de X-Force </h2>
                        <div class="blog__details__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook-square"></i> Facebook</a>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i> Linkedin</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="img/blog/details/banner.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        @foreach ($xmen as $contenido)
                            <div class="blog__details__item">
                                <div class="blog__details__item__pic">
                                    <img src="{{$contenido['multimedia']}}" alt="">
                                </div>
                                <div class="blog__details__item__text">
                                    <h4>{{$contenido['name']}}</h4>
                                        <p>{{$contenido['publication_date']}}</p><br>
                                        <p>{{$contenido['summary']}}</p><br>
                                </div>
                            </div>
                            
                        @endforeach
                        @foreach ($deadpool as $contenido)
                            <div class="blog__details__item">
                                <div class="blog__details__item__pic">
                                    <img src="{{$contenido['multimedia']}}" alt="">
                                </div>
                                <div class="blog__details__item__text">
                                    <h4>{{$contenido['name']}}</h4>
                                        <p>{{$contenido['publication_date']}}</p><br>
                                        <p>{{$contenido['summary']}}</p><br>
                                </div>
                            </div>
                            
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Section End -->
@endsection