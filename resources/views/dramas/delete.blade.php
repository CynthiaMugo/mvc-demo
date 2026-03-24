@foreach($dramas as $drama)
    <p>{{ $drama->title }}</p>

    <form method="POST" action="/dramas/{{ $drama->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach