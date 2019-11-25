@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($professors as $professor)
            <div class="row">
                <div class="col-sm-12">
                    <h2><a href="{{route('professor', $professor->id)}}">{{$professor->name}}</a></h2>
                    <p>{!! $professor->description_short !!}</p>
                </div>
            </div>
        @empty
            <h2 class="text-center">Відсутні записи</h2>
        @endforelse
    </div>
@endsection
