<div class="card-action">
    @if(auth()->check() && Auth::user()->fromDojo())
        <a href="{{ route($mainRoute.'.edit', $model->id) }}"
           data-tooltip="Edit"
           class="a-button inline-button">
            <span>Edit</span>
        </a>

        <form action="{{route($mainRoute.'.show', $model->id)}}">
            <button type="submit" class="a-button inline-button">SHOW</button>
        </form>

        <form action="{{ route($mainRoute.'.destroy', $model->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="a-button inline-button" data-tooltip="destroy" style="background-color: red;">
                <span>Delete</span>
            </button>
        </form>
    @endif
</div>
