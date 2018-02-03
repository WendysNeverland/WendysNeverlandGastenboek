@extends('layouts.master')
@section('content')
   <div>
        <ul>
            @foreach($berichten as $bericht)            
                <li>
                    <a href = "bericht/{{$bericht->id}}">{{$bericht->naam}}</a>
                    <a href = "bericht/{{$bericht->id}}/edit">Wijzigen</a>
                    <a href = "bericht/{{$bericht->id}}/delete">Verwijderen</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection