<ul class="tag mtb-50">
    @foreach($tags as $tag)
        <li><a href="{{url('/tags/'.$tag->slug)}}"><b>{{$tag->name}}</b></a></li>
    @endforeach
</ul>