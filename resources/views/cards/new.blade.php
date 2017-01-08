@extends('layout')

@section('content')

    <div class="row">
        <div>
{{--            <a href="{{ App\Card::PATH }}">Back</a>--}}
        </div>
        <div class="col-md-6 col-md-offset-3">
            <h1>Create new card</h1>

            <hr/>
            <h3>Add new Card</h3>
            {{--<form method="post" action="/cards/store">--}}
                {{--<input type="hidden" name="_token" value="{!! csrf_token() !!}">--}}
                {{--<div class="form-group">--}}
                    {{--<textarea name="title" id="create-card-new" class="form-control"></textarea>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<button type="submit" class="btn btn-primary">Add Card</button>--}}
                {{--</div>--}}
            {{--</form>--}}
        </div>
    </div>

@stop