<div class="sidebar-right">
<h4>Sort by:</h4>

<div class="sort-by-genres">
    <h5>Genres:</h5>
    <ul>
        @foreach ($genres as $genre)
            <li>
                <input type="checkbox" name="genres[]" value="{{ $genre->id }}">
                <label>{{ $genre->name }}</label>
            </li>
        @endforeach
    </ul>
</div>

<div class="sort-by-status">
    <h5>Status:</h5>
    <ul>
        @foreach ($statuses as $status)
            <li>
                <input type="checkbox" name="statuses[]" value="{{ $status->id }}">
                <label>{{ $status->name }}</label>
            </li>
        @endforeach
    </ul>
</div>

<button class="sort-button">Sort</button>
</div>
