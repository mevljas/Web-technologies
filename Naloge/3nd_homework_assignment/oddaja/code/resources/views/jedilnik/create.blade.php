@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-9 col-md-offset-4">
        <a href="/jedilnik" class="btn btn-default">Nazaj</a>
        <h1 class="display-3">Nov vnos</h1>
        <div>
            {!! Form::open(['action' => 'JedilnikController@store', 'method' => 'POST', 'enctype' =>
            'multipart/form-data',]) !!}
            <div class="form-group {{ $errors->has('Ime') ? ' has-error' : '' }}">
                {{Form::label('Ime', 'Ime' , [ 'class' => 'control-label'])}}
                {{Form::text('Ime', null, ['class' => 'form-control', 'placeholder' => "Ime",'style'=>'width:40%',
                'required'])}}
                @if ($errors->has('Ime'))
                <span class="help-block">
                        <strong>{{ $errors->first('Ime') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('Vrsta') ? ' has-error' : '' }}">
                {{Form::label('Vrsta', 'Vrsta', [ 'class' => 'control-label'])}}
                {{Form::text('Vrsta', null, ['class' => 'form-control', 'placeholder' => "Vrsta",'style'=>'width:20%',
                'required'])}}
                @if ($errors->has('Vrsta'))
                <span class="help-block">
                        <strong>{{ $errors->first('Vrsta') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('Cena') ? ' has-error' : '' }}">
                {{Form::label('Cena', 'Cena', [ 'class' => 'control-label'])}}
                {{Form::number('Cena', null, ['class' => 'form-control' , 'placeholder' => "Cena"
                ,'style'=>'width:10%', 'min'=>0.50, 'max'=>50.00, 'step'=>'0.10', 'required'])}}
                @if ($errors->has('Cena'))
                <span class="help-block">
                        <strong>{{ $errors->first('Cena') }}</strong>
                    </span>
                @endif
            </div>


            {{Form::submit('Potrdi', ['class'=>'btn btn-primary', 'style'=>'width:20%'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection