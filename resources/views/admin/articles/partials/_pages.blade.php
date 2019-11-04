@foreach($pages as $page)
    <option value="{{$page->id ?? ""}}"
            @isset($article->id)
            @foreach($article->pages as $page_article)
                @if($page->id == $page_article->id)
                    selected="selected"
                    @endif
                @endforeach
        @endisset
    >
        {!! $delimiter ?? "" !!}{{$page->title ?? ""}}
    </option>
    @if(count($page->children) > 0)
        @include('admin.pages.partials._pages', [
            'pages' => $page->children,
            'delimiter' => ' | - ' . $delimiter
        ])
    @endif
@endforeach
