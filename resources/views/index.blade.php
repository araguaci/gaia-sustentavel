{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/StylesIndex.css') }}">

{{-- nome da página --}}
<title>Gaia Sustentável</title>

@section('index')
    {{-- imagem de destaque da página --}}
    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/paginas/img-header.jpg" class="d-block w-100"
                        alt="Toalhas empilhadas, vidros, frutas e pregadores de madeira enfeitando uma mesa">
                </div>
            </div>
        </div>
    </div>

    {{-- cards de páginas institucionais --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/paginas/quem-somos.jpg" class="card-img-top"
                        alt="Mãos segurando uma planta com terra">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/sobre">Quem
                                somos</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/paginas/como-funciona.jpg" class="card-img-top" alt="Produtos de banho">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none"
                                href="/como-funciona">Como funciona</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/paginas/fale-conosco.jpg" class="card-img-top" alt="Mão escrevendo em um papel">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/contato">Fale
                                conosco</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- conteúdo da página --}}
    <div class="titulo mt-5">
        <h5>Mais vendidos</h5>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{id}"> </a></h5>
                        <p class="card-text"> </p>
                        <div class="btn-produto">
                            <a href="/produto/{id}" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="titulo mt-5">
        <h5>Novidades</h5>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#"> </a></h5>
                        <p class="card-text"> </p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection