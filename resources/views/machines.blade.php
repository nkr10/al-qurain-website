@extends('layout')

@section('title', 'Machines')

@section('content')
    <h1>Machines</h1>

    <section class="gallery">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @forelse ($machines as $machine)
                    <div class="col-lg-4 mb-3">
                        <div class="card reveal">
                            <div class="image-container"><img src="img_vehicles/{{ $machine->image_path }}" class="img-fluid card-img-top" alt="{{ $machine->name }}"></div>

                            <div class="card-body">
                                <h5 class="card-title">{{ $machine->name }}</h5>
                                <p class="card-text">{{ $machine->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    No machines found.
                @endforelse
            </div>
        </div>
    </section>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

            function reveal(){
                let reveals = document.querySelectorAll('.reveal');

                for (let i = 0; i < reveals.length; i++){

                    let windowHeight = window.innerHeight;
                    let revealTop = reveals[i].getBoundingClientRect().top;
                    let revealPoint = 20;

                    if(revealTop < windowHeight - revealPoint){
                        reveals[i].classList.add('active');
                    }

                    else{
                        reveals[i].classList.remove('active');
                    }
                }


            }

    </script>


@endsection
