@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($disciplines as $discipline)
            <div class="row" style="border: #e3e3e3 1px solid; margin: 10px;">
                <div class="col">
                    <div class="row">
                        <div class="col" style="margin: 5px;">
                            <h2>{{$discipline->name}}</h2>
                            <p>{!! $discipline->description_short !!}</p>
                        </div>

                        <a class="my-style-btn" style="position: absolute;
                bottom: 0; right: 0; width: 200px; float: right; text-align: center"
                           href="{{route('discipline', $discipline->id)}}">
                            Детальніше
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <h2 class="text-center">Відсутні записи</h2>
        @endforelse
        <div>
            <ul class="pagination">
                {{$disciplines->links()}}
            </ul>
        </div>
    </div>
@endsection
