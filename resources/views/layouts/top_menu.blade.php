@foreach($pages as $page)
@if($page->children->where('published', 1)->count())
    <li class="nav-item dropdown">
        <a href="{{"/site/page/$page->slug"}}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$page->title}}</a>
        <ul class="dropdown-menu" role="menu">
            @include('layouts.top_menu', ['pages' => $page->children])
        </ul>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{url("/site/page/$page->slug")}}">{{$page->title}}</a>
    @endif
    </li>
    @endforeach
