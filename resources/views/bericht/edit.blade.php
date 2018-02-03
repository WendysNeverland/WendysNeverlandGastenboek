@extends('layouts.master')
@section('content')
{!!Form::model($bericht, ['method' => 'PATCH','action' => ['BerichtController@update', 'Bericht' => $bericht->id], 'files'=> true])!!}

@include('bericht.formBasis')

<div class="form-group">
    {!! Form::submit('Wijzigen',  ['class' => 'btn btn-primary form-controle']) !!}
</div>

{!!Form::close()!!}
@include('layouts.errors')
@endsection