
<div>
{{--    negali prasidet html skaiciumi--}}
    <select name="a{{$animeId}}" id="{{ 'field_'.$animeId }}">

{{--        changing default shown--}}
        <option value="">Select status</option>

{{--ciklas shown choices--}}
        @foreach($options as $option)
            <option value="{{ $option?->id }}"
                {{$option?->id == $watchState?->id ? 'selected' : '' }}>
                {{$option?->name}}
            </option>
        @endforeach
    </select>

    <script>
        $(document).ready(function () {
            $('#field_{{$animeId }}').on('change', function (e) {
                e.preventDefault();
                let statusId = $(this).val();

                let animeId = {{$animeId}};

                console.log('animeId:', animeId);


                $.ajax({
                    url: '/anime/' + animeId + '/status',
                    type: 'PUT',

                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    data: { status_id: statusId },
                    success: function (response) {
                        console.log(response.message);
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
</div>
