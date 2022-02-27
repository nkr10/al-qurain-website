@extends('layout')

@section('title', 'Al-Qurain Al-Ahlia')

@section('content')


    <!--carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src={{ asset('images/image2.jpg') }} class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>We build safely, sustainably and with certainty</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src={{ asset('images/image3.jpg') }} class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>We make places better for generations to come</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src={{ asset('images/image5.jpg') }} class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>We are Kuwait's most innovative construction company</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--jumbotron-->
    <div class="heading-container">
        <!--div class="container"-->
            <!--h1 class="display-4">Fluid jumbotron</h1-->
            <img src={{ asset('images/logo.png') }} alt="logo-image" class="logo-image">
            <p class="lead">QAC the company for general Trading & Contracting W.L.L. was established in 2004 to provide several services in the project, includes civil, electrical, mechanical services (in the range of constructing steel structures and pipelines for gas, oil & petrochemicals.) and welding projects as a primer contractor. </p>
        <!--/div-->
    </div>


@endsection

