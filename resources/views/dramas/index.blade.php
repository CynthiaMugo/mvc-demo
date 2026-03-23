<h1>My K-Drama Tracker</h1>
<ul>
@forelse($dramas as $drama)
    <li>
        <strong>{{ $drama->title }}</strong> 
        - Genre: {{ $drama->genre }} 
        - Episodes: {{ $drama->episodes }} 
        - Watched: {{ $drama->watched ? 'Yes' : 'No' }}
    </li>
@empty
    <li>No dramas found.</li>
@endforelse
</ul>