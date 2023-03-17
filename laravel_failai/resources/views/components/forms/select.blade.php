<div>

    <select name="{{$field}}" id="{{'field_'.$field}}">
{{--        <option value="">Select role</option>--}}
        @foreach($options as $option)

            <option value="{{$option}}">{{$option}}</option>
        @endforeach
    </select>
</div>
