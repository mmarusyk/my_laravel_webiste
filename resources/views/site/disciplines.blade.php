@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($disciplines as $discipline)
            <div class="row">
                <div class="col-sm-12">
                    <h2><a href="{{route('discipline', $discipline->id)}}">{{$discipline->name}}</a></h2>
                    <p>{!! $discipline->description_short !!}</p>
                </div>
            </div>
        @empty
            <h2 class="text-center">Відсутні записи</h2>
        @endforelse
    </div>
@endsection
