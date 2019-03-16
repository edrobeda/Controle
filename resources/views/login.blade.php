@extends('layouts.app')
@section('content')
    

        <div class="flex-center position-ref full-height">

            {!! Form::open(['method' => 'post', 'class' => 'center-block']) !!}
                <h3 class='Text'>
                    LOGIN
                </h3>
                <div class="form-group">
                
                    {!! Form::label('username', 'Usuário')!!}
                    {!! Form::text('username') !!}
            
                </div>
                <div class="form-group">

                    {!! Form::label('password', 'Senha')!!}
                    {!! Form::password('password') !!}

                </div>
                {!! Form::submit('Logar') !!}
                @if(session()->has('error'))
                    <small class='warning'> Usuário não encontrado! </small>
                @endif
            {!! Form::close() !!}

        </div>

@endsection