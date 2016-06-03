<!-- Id Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_estado', 'Id Estado:') !!}
    {!! Form::number('id_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Uf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uf', 'Uf:') !!}
    {!! Form::text('uf', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais', 'Pais:') !!}
    {!! Form::number('pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estados.index') !!}" class="btn btn-default">Cancel</a>
</div>
