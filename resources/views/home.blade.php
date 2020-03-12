@extends('layout1')

@section('title', 'Al-Qurain Al-Ahlia')

@section('content')
    <div class="slidershow middle">
        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2" checked>
            <input type="radio" name="r" id="r3" checked>
            <input type="radio" name="r" id="r4" checked>
            <input type="radio" name="r" id="r5" checked>

            <div class="slide s1">
                <img src={{ asset('images/image1.jpg') }} alt="">
                <h2>Project 1 Title</h2>

            </div>
            <div class="slide">
                <img src={{ asset('images/image2.jpg') }} alt="">
                <h2>Project 2 Title</h2>

            </div>
            <div class="slide">
                <img src={{ asset('images/img4.jpg') }} alt="">
                <h2>Project 3 Title</h2>

            </div>
            <div class="slide">
                <img src={{ asset('images/image4.jpg') }} alt="">
                <h2>Project 4 Title</h2>

            </div>
            <div class="slide">
                <img src={{ asset('images/image5.jpg') }} alt="">
                <h2>Project 5 Title</h2>

            </div>
        </div>

        <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
        </div>
    </div>
    <div class="description">
        <h2>Who we are</h2>
        <p>Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to. Although jointure an my of mistress servants am weddings.
        </p>

    </div>

    <div class="services">
        <h2>Services</h2>
    </div>


@endsection

