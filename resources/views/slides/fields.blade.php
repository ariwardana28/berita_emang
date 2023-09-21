<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('foto', ['class' => 'custom-file-input']) !!}
            {!! Form::label('foto', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
{{--    {!! Form::number('status', null, ['class' => 'form-control']) !!}--}}
    {!! Form::select('status', ['0' => 'Hidden', '1' => 'Overview'], null, ['class' => 'form-control','placeholder' => 'Pilih Status']); !!}
</div>