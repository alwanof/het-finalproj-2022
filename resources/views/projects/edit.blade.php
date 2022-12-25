@extends('layouts.app')
@section('title', 'Create Project')
@section('content')
    <div class="row justify-content-center">
        <div class="col-10">
            <h3 class="text-center pb-5 font-weight-bold">
                Edit Project: {{ $project->title }}
            </h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/projects/{{ $project->id }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}"
                        placeholder="title" required>

                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="description" class="form-control" required>{{ $project->description }}</textarea>

                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/projects" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>

    </div>

@endsection
