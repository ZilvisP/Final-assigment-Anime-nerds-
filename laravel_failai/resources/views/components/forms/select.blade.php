<div>
    <select name="{{$field}}" id="{{'field_'.$field}}">
        @foreach($options as $option)
            <option value="{{$option}}">{{$option}}</option>
        @endforeach
    </select>
</div>
