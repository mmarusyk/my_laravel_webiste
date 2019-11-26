@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$discipline->name}}</h1>
                <p>{{$discipline->course}}</p>
                <p>{{$discipline->semester}}</p>
                <p>{{$discipline->lecturer}}</p>
                <p>{!! $discipline->description !!}</p>
            </div>
        </div>
    </div>
@endsection
