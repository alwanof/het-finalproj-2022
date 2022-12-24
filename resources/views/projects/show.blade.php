@extends('layouts.app')
@section('content')
    <header class="d-flex justify-content-between align-items-center my-5">
        <div class="h6">
            <a href="/projects" class="text-dark">
                Projects
            </a> / Project Title
        </div>
        <div>
            <a href="/projects/edit" class="btn btn-primary px-4">
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
                        <form action="">
                            <select name="status" class="form-control">
                                <option value="1">Done</option>
                                <option value="2" selected>In Progress</option>
                                <option value="3">To Do</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                            <label class="form-check-label" for="firstCheckbox">Task 1</label>

                        </div>
                        <span>
                            <img src="/icons/trash.svg" alt="">
                        </span>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <input class="form-check-input me-1" type="checkbox" value="" checked id="firstCheckbox">
                            <label class="form-check-label text-muted" for="firstCheckbox"><del>Task 2</del></label>

                        </div>
                        <span>
                            <img src="/icons/trash.svg" alt="">
                        </span>

                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                            <label class="form-check-label" for="firstCheckbox">Task 3</label>

                        </div>
                        <span>
                            <img src="/icons/trash.svg" alt="">
                        </span>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                            <label class="form-check-label" for="firstCheckbox">Task 4</label>

                        </div>
                        <span>
                            <img src="/icons/trash.svg" alt="">
                        </span>

                    </li>

                </ul>
                <div class="input-group my-3">
                    <input type="text" class="form-control" placeholder="Add new task" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="button">Add</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
