<h1>Edit Drama</h1>

<form method="POST" action="/dramas/{{ $drama->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $drama->title }}"><br>
    <input type="text" name="genre" value="{{ $drama->genre }}"><br>

    <button type="submit">Update</button>
</form>