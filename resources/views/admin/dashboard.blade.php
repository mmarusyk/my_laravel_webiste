@extends('admin.layouts.app_admin')

@section('content')
    <h1>Admin Page</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="jumbotron">
                    <p><span class="label label-primary">Кількість сторінок: 0</span></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="jumbotron">
                    <p><span class="label label-primary">Кількість записів: 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Створити сторінку</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Сторінка перша</h4>
                    <p class="list-group-item-text">
                        Кількість матеріалів
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Створити запис</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Запис перший</h4>
                    <p class="list-group-item-text">
                        Сторінка
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection
