<h1>My K-Drama Tracker</h1>

<a href="/dramas/create">+ Add New Drama</a>

<ul>
@forelse($dramas as $drama)
    <li style="margin-bottom: 15px;">
        <strong>{{ $drama->title }}</strong><br>
        Genre: {{ $drama->genre }}<br>
        Episodes: {{ $drama->episodes }}<br>
        Watched: {{ $drama->watched ? 'Yes' : 'No' }}<br>

        <!-- Edit button -->
        <a href="/dramas/{{ $drama->id }}/edit">Edit</a>

        <!-- Delete button -->
        <form method="POST" action="/dramas/{{ $drama->id }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this drama?')">
                Delete
            </button>
        </form>
    </li>
@empty
    <li>No dramas found.</li>
@endforelse
</ul>