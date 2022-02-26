@extends('layout')

@section('title', 'Machines')

@section('content')
    <h1>Machines</h1>

    <section class="gallery">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @foreach ($machines as $machine)
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <div class="image-container"><img src="img_vehicles/{{ $machine->image_path }}" class="img-fluid card-img-top" alt="{{ $machine->name }}"></div>

                            <div class="card-body">
                                <h5 class="card-title">{{ $machine->name }}</h5>
                                <p class="card-text">{{ $machine->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
