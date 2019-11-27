@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$discipline->name}}</h1>
                <p>Курс: {{$discipline->course}}</p>
                <p>Семестр: {{$discipline->semester}}</p>
                <p>Лектор: {{$discipline->lecturer}}</p>
                <p>Опис</p>
                <p>{!! $discipline->description !!}</p>
            </div>
        </div>
    </div>
@endsection
