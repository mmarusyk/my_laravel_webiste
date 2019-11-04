@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
                @slot('title') Список сторінок @endslot
                @slot('parent') Головна @endslot
                @slot('active') Сторінки @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.page.create')}}" class="btn btn-primary">Створити сторінку</a>
        </a>
        <table class="table table-striped">
            <thead>
                <th>Назва</th>
                <th>Публікація</th>
                <th class="text-right">Дія</th>
            </thead>
            <tbody>
            @forelse($pages as $page)
                <tr>
                    <td>{{$page->title}}</td>
                    <td>{{$page->published}}</td>
                    <td>
                        <a href="{{route('admin.page.edit', ['id'=>$page->id])}}"></a>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center"><h1>Таблиця пуста!</h1></td>
            </tr>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination">
                            {{$pages->links()}}
                        </ul>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

@endsection
