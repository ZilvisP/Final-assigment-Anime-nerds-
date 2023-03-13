<div>
    <select name="{{$field}}" id="{{'field_'.$field}}">
        @foreach($options->where('category', 'Anime') as $option)
            <option value="{{$option->id}}">{{$option->name}}</option>
        @endforeach
    </select>
</div>
