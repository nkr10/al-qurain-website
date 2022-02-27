@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>
    <div class="row justify-content-center">
        @forelse($projects as $project)
            <div class="col-lg-5 mb-3">
                <div class="project-image-container reveal">
                    <img src="img_prj/{{ $project->image_path }}" class="project-image" alt="{{ $project->name }}">
                    <div class="project-image-overlay">
                        <h5 class="image-title">{{ $project->name }}</h5>
                        <p class="image-text">{{ $project->description }}</p>
                    </div>
                </div>
            </div>
        @empty
            No projects found.
        @endforelse
    </div>

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
