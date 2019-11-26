@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редагування запису @endslot
            @slot('parent') Головна @endslot
            @slot('active') Записи @endslot
        @endcomponent

        <hr>
        <form action="{{ route('admin.professor.update', $professor) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}

            @include('admin.professors.partials._form')

        </form>
    </div>
@endsection
