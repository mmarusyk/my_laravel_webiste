@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редагування сторінки @endslot
            @slot('parent') Головна @endslot
            @slot('active') Сторінки @endslot
        @endcomponent

        <hr>
        <form action="{{ route('admin.page.update', $page) }}" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}

            @include('admin.pages.partials._form')
        </form>
    </div>
@endsection
