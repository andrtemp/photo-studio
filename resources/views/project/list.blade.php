@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center text-white">{{ __('Projects') }}</h2>
        <div class="d-flex flex-wrap justify-content-between">
            @foreach($projects as $project)
                <div class="card card-project">
                    <span class="card-header">
                        <a href="{{ route('project.show', $project->id) }}">{{ $project->name }}</a>
                    </span>
                    <span class="card-body">
                        <img class="rounded" src="{{ asset('storage/' . $project->photos[0]->path) }}"  alt="{{ $project->description }}"/>
                    </span>
                    <span class="card-footer">
                        {{ $project->created_at }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
@endsection