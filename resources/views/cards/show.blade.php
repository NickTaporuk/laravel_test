@extends('layout')

@section('content')

    <div class="row">
        <div>
            <a href="{{$card::PATH}}">Back</a>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->title }}</h1>

            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">
                        {{ $note->body }}
                        <a href="#" class="pull-right">{{ $note->user->name }}</a>
                    </li>
                @endforeach
            </ul>
            <hr/>
            <h3>Add new Note</h3>
            <form method="post" action="{{ $card->path() }}/notes">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                {{--<input type="hidden" name="user_id" value="1">--}}
                <div class="form-group">
                    <textarea name="body" id="create-card-new" class="form-control">{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>
            
            @if(count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

@stop