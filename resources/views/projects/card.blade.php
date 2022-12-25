<div class="card">
    <div class="card-body">
        <div class="status">
            <span class="text-success">
                @switch($project->status)
                    @case(0)
                        {{ 'In Progress' }}
                    @break

                    @case(1)
                        {{ 'Completed' }}
                    @break

                    @default
                        {{ 'Canceled' }}
                @endswitch
            </span>
            <h5 class="font-weight-bold card-title">
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </h5>
            <div class="card-text mt-4">
                {{ Str::limit($project->description, 50) }}
            </div>
            <div class="card-footer mt-2">
                <div class="d-flex">
                    <div class="d-flex align-items-center">
                        <img src="/icons/clock.svg" alt="clock">
                        <div class="mx-2">
                            {{ $project->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="d-flex align-items-center m-auto">
                        <img src="/icons/list-check.svg" alt="clock">
                        <div class="mx-2">
                            {{ count($project->tasks) }} Tasks
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <form action="/projects/{{ $project->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger">
                                <img src="/icons/trash.svg" alt="clock">
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
