@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список викладачів @endslot
            @slot('parent') Головна @endslot
            @slot('active') Викладачі @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.professor.create')}}" class="btn btn-primary">Створити запис</a>
        </a>
        <table class="table table-striped">
            <thead>
            <th>Назва</th>
            <th>Публікація</th>
            <th class="text-center">Дія</th>
            </thead>
            <tbody>
            @forelse($professors as $professor)
                <tr>
                    <td>{{$professor->name}}</td>
                    <td>{{$professor->published}}</td>
                    <td class="text-center">
                        <form onsubmit="if(confirm('Видалити?')){return true} else{return false}" action="{{route('admin.professor.destroy', $professor)}}" method="post">

                            @method('DELETE')
                            @csrf

                            <a class="btn btn-info" href="{{route('admin.professor.edit', $professor)}}">Редагувати</a>
                            <button type="submit" class="btn btn-danger">Видалити</button>
                        </form>
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
                        {{$professors->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
