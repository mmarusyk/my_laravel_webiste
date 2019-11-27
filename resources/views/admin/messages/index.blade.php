@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список повідомлень від користувачів @endslot
            @slot('parent') Головна @endslot
            @slot('active') Повідомлення @endslot
        @endcomponent

        <hr>

        <table class="table table-striped">
            <thead>
            <th>ID</th>
            <th>Ім'я</th>
            <th>Прізвище</th>
            <th>Email</th>
            <th>Повідомлення</th>
            <th>Дата створення</th>
            <th class="text-center">Дія</th>
            </thead>
            <tbody>
            @forelse($messages as $message)
                <tr>
                    <td>{{$message->id}}</td>
                    <td>{{$message->name}}</td>
                    <td>{{$message->second_name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->message}}</td>
                    <td>{{$message->created_at}}</td>
                    <td class="text-center">
                        <form onsubmit="if(confirm('Видалити?')){return true} else{return false}" action="{{route('admin.message.destroy', $message)}}" method="post">

                            @method('DELETE')
                            @csrf

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
                        {{$messages->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
