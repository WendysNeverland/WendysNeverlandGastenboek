<div class="form-group">
    {!! Form::label('naam','Naam:')!!}
    {!! Form::text('naam', null, ['class' => 'form-controle', 'required'=>true]) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Email:')!!}
    {!! Form::text('email', null, ['class' => 'form-controle', 'required'=>true]) !!}
</div>

<div class="form-group">
    {!! Form::label('telefoonnummer','telefoonnummer:')!!}
    {!! Form::text('telefoonnummer', null, ['class' => 'form-controle']) !!}
</div>

<div class="form-group">
    {!! Form::label('foto','Foto:')!!}
    {!! Form::file('foto', null, ['class' => 'form-controle']) !!}
</div>

<div class="form-group">
    {!! Form::label('bericht','Bericht:')!!}
    {!! Form::textarea('bericht', null, ['class' => 'form-controle', 'required'=>true]) !!}
</div>

<div class="form-group">
    {!! Form::label('mailinglist','Inschrijven in onze mailinglist')!!}
    {!! Form::checkbox('mailinglist', 0, ['class' => 'form-controle']) !!}
</div>
