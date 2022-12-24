@extends('layouts.app')
@section('title', 'Create Project')
@section('content')
    <div class="row justify-content-center">
        <div class="col-10">
            <h3 class="text-center pb-5 font-weight-bold">
                New Project
            </h3>

            <form action="/projects" method="POST">
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title">

                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="description" class="form-control"></textarea>

                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Create Project</button>
                    <a href="/projects" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>

    </div>

@endsection
