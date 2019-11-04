@foreach($pages as $page_l)
    <option value="{{$page_l->id ?? ""}}"
        @isset($page->id)
            @if ($page->parent_id == $page_l->id)
                    selected=""
                @endif
            @if ($page->id == $page_l->id)
                hidden=""
                @endif
            @endisset
    >
        {!! $delimiter ?? "" !!}{{$page_l->title ?? ""}}
    </option>
    @if(count($page_l->children) > 0)
            @include('admin.pages.partials._pages', [
                'pages' => $page_l->children,
                'delimiter' => ' | - ' . $delimiter
            ])
        @endif
@endforeach
