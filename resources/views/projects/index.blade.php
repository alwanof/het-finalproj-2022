@extends('layouts.app')
@section('content')
    <header class="d-flex justify-content-between align-items-center my-5">
        <div class="h6">
            <a href="/projects" class="text-dark">
                Projects
            </a>
        </div>
        <div>
            <a href="/projects/create" class="btn btn-primary px-4">
                Create Project
            </a>

        </div>
    </header>
    <section>
        <div class="row">
            <div class="col-4 mb-4">
                @include('projects.card')
            </div>
            <div class="col-4 mb-4">
                @include('projects.card')
            </div>
            <div class="col-4 mb-4">
                @include('projects.card')
            </div>
        </div>
    </section>
@endsection
