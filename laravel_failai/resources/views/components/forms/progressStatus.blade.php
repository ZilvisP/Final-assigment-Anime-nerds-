
<div>
{{--    negali prasidet html skaiciumi--}}
    <select name="a{{$mediaId}}" id="{{ 'field_'.$mediaId }}">

{{--        changing default shown--}}
        <option value="">Select status</option>

{{--ciklas shown choices--}}
        @foreach($options as $option)
            <option value="{{ $option?->id }}"
                {{$option?->id == $userProgressState?->id ? 'selected' : '' }}>
                {{$option?->name}}
            </option>
        @endforeach
    </select>
    <script>
        $(document).ready(function () {
            $('#field_{{$mediaId}}').on('change', function (e) {
                e.preventDefault();

                let statusId = $(this).val();
                let mediaId = {{$mediaId}};
// for changing url for reuse purpose
                let mediaType = '{{$mediaType}}'

                console.log('mediaId:', mediaId);


                $.ajax({
                    // url: '/anime/' + mediaId + '/status',
                    url: '/' + mediaType + '/' + mediaId + '/status', // <-- can use on anime and manga
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
