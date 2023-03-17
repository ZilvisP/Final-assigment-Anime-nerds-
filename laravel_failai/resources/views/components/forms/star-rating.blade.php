{{--<div class="anime-rating">--}}
<div class="stars" data-mediaid="{{$mediaId}}" data-mediatype="{{$mediaType}}">
    @for($i = 1; $i <= 5; $i++)
        @if(isset($rating) && $rating >= $i)
            <i class="fas fa-star" data-rating="{{$i}}"></i>
        @else
            <i class="far fa-star" data-rating="{{$i}}"></i>
        @endif
    @endfor
</div>
