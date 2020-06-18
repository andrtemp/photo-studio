@extends('layouts.app')

@section('content')
    <div class="container text-white">
        <h2  class="text-center">{{ $project->name }}</h2>
        <p class="text-center">
            {{ $project->description }}
        </p>
        <div class="d-flex justify-content-between flex-wrap">
            @foreach($project->photos as $photo)
                <div class="image-album">
                    <img class="rounded" src="{{ asset('storage/' . $photo->path) }}" alt="1{{ $photo->description }}"/>
                </div>
            @endforeach
        </div>
    </div>
@endsection