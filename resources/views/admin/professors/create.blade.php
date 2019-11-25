@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Створення запису викладача @endslot
            @slot('parent') Головна @endslot
            @slot('active') Викладачі @endslot
        @endcomponent

        <hr>
        <form action="{{ route('admin.professor.store') }}" method="post">
            {{csrf_field()}}

            @include('admin.professors.partials._form')
        </form>
    </div>
@endsection
