@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Створення запису дисципліни @endslot
            @slot('parent') Головна @endslot
            @slot('active') Дисципліни @endslot
        @endcomponent

        <hr>
        <form action="{{ route('admin.discipline.store') }}" method="post">
            {{csrf_field()}}

            @include('admin.disciplines.partials._form')
        </form>
    </div>
@endsection
