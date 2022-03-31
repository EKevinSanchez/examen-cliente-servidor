
@extends('layout.header')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
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
                    <form action="/update" method="post">
                    @csrf
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="section-title">
                                        <h4>Escriba el nuevo nombre</h4>
                                        <input type="submit" value="Guardar" class="btn-go right">
                                        <input type="hidden" name="user_id" value="@auth {{Auth::user()->id}} @endauth">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <input type="text" name="name" id="name" placeholder="Nuevo nombre">
                        </div>
                        </form>
                    </div>
                </div>
                
</div>
</div>
@error('message')
        <script>
            alert('{{$message}}');
        </script>
@enderror
</section>
<!-- Product Section End -->
@endsection
