@extends('layout')

@section('title', 'Al-Qurain Al-Ahlia')

@section('content')
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <div class="row">
                @forelse($projects as $project)
                    <div class="col-md-6 mt-3">
                        <div class="card" style="...">
                            <img src="{{ $project->image_path }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <a href="/projects/{{ $project->id }}" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>
                @empty
                No project found.
                @endforelse
            </div>
        </div>
    </div>
@endsection
