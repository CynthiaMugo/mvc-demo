<h1>Add Drama</h1>

<form method="POST" action="/dramas">
    @csrf

    <input type="text" name="title" placeholder="Title"><br>
    <input type="text" name="genre" placeholder="Genre"><br>
    <input type="number" name="episodes" placeholder="Episodes"><br>

    <button type="submit">Save</button>
</form>