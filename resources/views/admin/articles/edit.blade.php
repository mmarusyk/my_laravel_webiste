@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редагування запису @endslot
            @slot('parent') Головна @endslot
            @slot('active') Записи @endslot
        @endcomponent

        <hr>
        <form action="{{ route('admin.article.update', $article) }}" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}

            @include('admin.articles.partials._form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
