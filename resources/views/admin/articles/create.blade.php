@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Створення запису @endslot
            @slot('parent') Головна @endslot
            @slot('active') Записи @endslot
        @endcomponent

        <hr>
        <form action="{{ route('admin.article.store') }}" method="post">
            {{csrf_field()}}

            @include('admin.articles.partials._form')

            <input type="hidden" name="create_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
