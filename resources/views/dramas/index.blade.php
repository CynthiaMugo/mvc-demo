<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h1 class="mb-4">My K-Drama Tracker</h1>

    <a href="/dramas/create" class="btn btn-primary mb-3">+ Add Drama</a>

    <div class="row">
        @forelse($dramas as $drama)
            <div class="col-md-4">
                <div class="card mb-3 p-3 shadow-sm">
                    <h5>{{ $drama->title }}</h5>
                    <p>Genre: {{ $drama->genre }}</p>
                    <p>Episodes: {{ $drama->episodes }}</p>

                    <span class="badge {{ $drama->watched ? 'bg-success' : 'bg-secondary' }}">
                        {{ $drama->watched ? 'Watched' : 'Not Watched' }}
                    </span>
                    <form method="POST" action="/dramas/{{ $drama->id }}/toggle" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-sm btn-info">
                            Toggle Watched
                        </button>
                    </form>
                    <div class="mt-2">
                        <a href="/dramas/{{ $drama->id }}/edit" class="btn btn-sm btn-warning">Edit</a>

                        <form method="POST" action="/dramas/{{ $drama->id }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this drama?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p>No dramas found.</p>
        @endforelse
    </div>
</div>