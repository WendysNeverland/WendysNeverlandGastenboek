@extends('layouts.master')
@section('content')
{!!Form::open(['action' => 'BerichtController@store', 'files'=> true])!!}

@include('bericht.formBasis')

<div class="form-group">
    {!! Form::submit('Verzenden',  ['class' => 'btn btn-primary form-controle']) !!}
</div>

{!!Form::close()!!}
@include('layouts.errors')
@endsection