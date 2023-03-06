<div class="card-action">
    <a href="{{ route($mainRoute.'.edit', $model->id) }}"
       data-tooltip="Edit"
       class="tooltipped waves-effect waves-light green btn-small">
        <i class="tiny material-icons">edit</i>
    </a>

    <form action="{{route($mainRoute.'.show', $model->id)}}">
        <button type="submit">SHOW</button>
    </form>

    <form action="{{ route($mainRoute.'.destroy', $model->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" data-tooltip="destroy"
                class="tooltipped waves-effect waves-light red btn-small">
            <i class="tiny material-icons">delete</i>
        </button>
    </form>
</div>
