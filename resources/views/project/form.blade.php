@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <h2 class="card-header">{{ __('Create project') }}</h2>
            <div class="card-body">
                <form class="form" action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="{{ __('Enter name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">{{  __('Description') }}</label>
                        <textarea class="form-control" id="description" name="description"
                                  placeholder="{{  __('Enter description') }}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="files">{{ __('Files') }}</label>
                        <input type="file" class="form-control" id="files" name="files[]"
                               placeholder="{{ __('Upload files') }}" required multiple>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    <button type="reset" class="btn btn-danger">{{ __('Reset') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection