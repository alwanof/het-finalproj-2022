@extends('layouts.app')
@section('content')
    <header class="d-flex justify-content-between align-items-center my-5">
        <div class="h6">
            <a href="/projects" class="text-dark">
                Projects
            </a> / Project Title
        </div>
        <div>
            <a href="/projects/{{ $project->id }}/edit" class="btn btn-primary px-4">
                Edit Project
            </a>

        </div>
    </header>
    <section>
        <div class="row">
            <div class="col-4">
                @include('projects.card')
                <div class="card mt-2">
                    <div class="card-body">
                        <form action="/projects/{{ $project->id }}/complete" method="POST">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="form-control" onchange="this.form.submit()">
                                <option value="0" {{ $project->status == 0 ? 'selected' : '' }}>In Progress</option>
                                <option value="1" {{ $project->status == 1 ? 'selected' : '' }}>Completed</option>
                                <option value="2" {{ $project->status == 2 ? 'selected' : '' }}>Conceled</option>
                            </select>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <ul class="list-group list-group-flush">
                    @forelse ($project->tasks as $task)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <form action="/tasks/{{ $task->id }}/complete" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input class="form-check-input me-1" name="completed" type="checkbox" value="1"
                                        {{ $task->completed == 1 ? 'checked' : '' }} id="firstCheckbox"
                                        onchange="this.form.submit()">
                                    <label class="form-check-label" for="firstCheckbox">{{ $task->name }}</label>

                                </form>
                            </div>
                            <span>


                                <form action="/tasks/{{ $task->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn">
                                        <img src="/icons/trash.svg" alt="">
                                    </button>

                                </form>

                            </span>

                        </li>
                    @empty
                        <div>
                            No tasks yet
                        </div>
                    @endforelse


                </ul>
                <form action="/tasks/{{ $project->id }}" method="POST">
                    @csrf
                    <div class="input-group my-3">
                        <input type="text" class="form-control" name="name" placeholder="Add new task"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success" type="submit">Add</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section>
@endsection
