<!-- Berita Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('berita_id', 'Berita Id:') !!}
    {!! Form::number('berita_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Komen Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('komen', 'Komen:') !!}
    {!! Form::textarea('komen', null, ['class' => 'form-control']) !!}
</div>