@extends('layouts.app')
@section('title')
    {{$page->title}}
@endsection
@section('content')
    <div class="container">
        @forelse($articles as $article)
            <div class="row" style="border: #e3e3e3 1px solid; margin: 10px;">
                <div class="col">
                    <div class="row">
                        <div class="col" style="margin: 5px;">
                            <h2>{{$article->title}}</h2>
                            <p>{!! $article->description_short !!}</p>
                        </div>

                        <a class="my-style-btn" style="position: absolute;
                bottom: 0; right: 0; width: 200px; float: right; text-align: center"
                           href="{{route('article', $article->slug)}}">
                            Детальніше
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <h2 class="text-center">Відсутні записи</h2>
        @endforelse
    </div>
@endsection
