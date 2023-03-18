<link rel="stylesheet" href="/css/sidebar_right.css"/>
<aside class="menu">
    <ul class="menu-list">
        {{--passing all states to foreach--}}
        @foreach($options as $option)
            <li>
                {{--passing media type and that selected status id to route for display--}}

                <a href="{{ url($mediaType . '/status/' . $option->id) }}">
                    {{ $option->name }}

                </a>

            </li>
        @endforeach
        <li>
            <a href="{{ url($mediaType) }}">All</a>
        </li>
    </ul>
</aside>
