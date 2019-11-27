@extends('layouts.app')

@section('content')
{{--<form action="{{url('/site/contact')}}" method="post">--}}
{{--    {{csrf_field()}}--}}

{{--    <div class="form-group">--}}
{{--        <label>Ім'я</label>--}}
{{--        <input type="text" name="name" class="form-control">--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label>Прізвище</label>--}}
{{--        <input type="text" name="name" class="form-control">--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label>Email</label>--}}
{{--        <input type="email" name="email" class="form-control">--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label>Повідомлення</label>--}}
{{--        <textarea name="content" class="form-control"></textarea>--}}
{{--    </div>--}}

{{--    <button type="submit" class="btn btn-outline-dark">Submit</button>--}}
{{--</form>--}}


<div class="container contact-form" style="margin-top:100px">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

    <form method="post" action="{{ route('contactus.store') }}">
        {{ csrf_field() }}
        <h3>Зв'язок</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" name="name" class="form-control" placeholder="Ім'я *"  required />
                    @if ($errors->has('name'))
                        <span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('second_name') ? ' has-error' : '' }}">
                    <input type="text" name="second_name" class="form-control" placeholder="Прізвище *"  required />
                    @if ($errors->has('seconds_name'))
                        <span class="help-block">
											<strong>{{ $errors->first('second_name') }}</strong>
										</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" class="form-control" placeholder="Email *"  required />
                    @if ($errors->has('email'))
                        <span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btn btn-outline-dark btn-round btn-lg" value="Надіслати" />

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                    <textarea name="message" class="form-control" placeholder="Повідомлення *" style="width: 100%; height: 150px;" required></textarea>
                    @if ($errors->has('message'))
                        <span class="help-block">
				<strong>{{ $errors->first('message') }}</strong>
				</span>
                    @endif
                </div>
            </div>
        </div>
    </form>
</div>


@endsection
