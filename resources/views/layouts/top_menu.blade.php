@foreach($pages as $page)
@if($page->children->where('published', 1)->count())
    <li class="dropdown">
        <a href="{{"/site/page/$page->slug"}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$page->title}}</a>
        <ul class="dropdown-menu" role="menu">
            @include('layouts.top_menu', ['pages' => $page->children])
        </ul>
        @else
            <li>
                <a href="{{url("/site/page/$page->slug")}}">{{$page->title}}</a>
    @endif
    </li>
    @endforeach
