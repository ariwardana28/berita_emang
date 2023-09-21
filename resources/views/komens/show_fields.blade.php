<!-- Berita Id Field -->
<div class="col-sm-12">
    {!! Form::label('berita_id', 'Berita Id:') !!}
    <p>{{ $komen->berita_id }}</p>
</div>

<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $komen->nama }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $komen->email }}</p>
</div>

<!-- Komen Field -->
<div class="col-sm-12">
    {!! Form::label('komen', 'Komen:') !!}
    <p>{{ $komen->komen }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $komen->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $komen->updated_at }}</p>
</div>

