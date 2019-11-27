@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($professors as $professor)
            <div class="row" style="border: #e3e3e3 1px solid; margin: 10px;">
                <div class="float-left">
                    <img src="{{URL::to('/')}}/images/{{$professor->image}}" width="200"/>
                </div>
                <div class="col float-right">
                    <div class="row">
                        <div class="col">
                            <h2>{{$professor->name}}</h2>
                            <p>{!! $professor->description_short !!}</p>
                        </div>
                    </div>
                    <a class="my-style-btn" style="position: absolute;
                bottom: 0; right: 0; width: 200px; float: right; text-align: center" href="{{route('professor', $professor->id)}}">
                        Детальніше
                    </a>

                </div>
            </div>

        @empty
            <h2 class="text-center">Відсутні записи</h2>
        @endforelse

        <div>
            <ul class="pagination">
                {{$professors->links()}}
            </ul>
        </div>
    </div>
@endsection
