@extends('admin.layouts.app_admin')

@section('content')
    <h1>Адмін Панель</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div>
                    <p><span class="label label-primary">Кількість сторінок: {{$count_pages}}</span></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div>
                    <p><span class="label label-primary">Кількість записів: {{$count_articles}}</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('admin.page.create')}}">Створити сторінку</a>
                @foreach($pages as $page)
                    <a class="list-group-item" href="{{route('admin.page.edit', $page)}}">
                        <h4 class="list-group-item-heading">{{$page->title}}</h4>
                        <p class="list-group-item-text">
                            {{$page->articles()->count()}}
                        </p>
                    </a>
                @endforeach

            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Створити запис</a>
                @foreach($articles as $article)
                    <a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
                        <h4 class="list-group-item-heading">{{$article->title}}</h4>
                        <p class="list-group-item-text">
                            {{$article->pages()->pluck('title')->implode(', ')}}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
