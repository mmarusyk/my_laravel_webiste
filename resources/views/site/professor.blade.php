@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$professor->name}}</h1>
                <p>{{$professor->position}}</p>
                <p>{{$professor->academic_status}}</p>
                <p>{{$professor->scientific_degree}}</p>
                <p>{!! $professor->description !!}</p>
            </div>
        </div>
    </div>
@endsection