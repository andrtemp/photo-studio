@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ __('Create project') }}</h2>
        <form class="form" action="{{ route('project.store') }}" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Enter name') }}">
            </div>
            <div class="form-group">
                <label for="description">{{  __('Description') }}</label>
                <textarea class="form-control" id="description" name="description" placeholder="{{  __('Enter description') }}"></textarea>
            </div>
            <div class="form-group">
                <label for="files">{{ __('Files') }}</label>
                <input type="file" class="form-control" id="files" name="files[]" placeholder="{{ __('Upload files') }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            <button type="reset" class="btn btn-danger">{{ __('Reset') }}</button>
        </form>
    </div>
@endsection