@extends('layout')

@section('title', 'Al-Qurain Al-Ahlia')

@section('content')
<div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h2 class="my-0 font-weight-normal">Services</h2>
    </div>
    <div class="card-body">
    <div class="row">
    @forelse($machines as $machine)
        <div class="col-md-6 mt-4">
            <div class="card" style="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $machine->name }}</h5>
                    <img src="{{ asset($machine->image_path) }}"  alt="{{ $machine->name }}" class="card-img-top img-fluid" >

                </div>
            </div>
        </div>
        @empty
            <p>No machine found</p>
    @endforelse
    </div>
    </div>
</div>

@endsection
