@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img src="{{URL::to('/')}}/images/{{$professor->image}}" class="img-thumbnail" width="300"/>
                <h2>{{$professor->name}}</h2>
                <p>Посада: {{$professor->position}}</p>
                <p>Вчене звання: {{$professor->academic_status}}</p>
                <p>Науковий ступінь: {{$professor->scientific_degree}}</p>
                <p>Біографія:</p>
                <p> {!! $professor->description !!}</p>
            </div>
        </div>
    </div>
@endsection
