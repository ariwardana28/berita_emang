<!-- Berita Daerah Id Field -->
<div class="col-sm-12">
    {!! Form::label('berita_daerah_id', 'Berita Daerah Id:') !!}
    <p>{{ $komenDaerah->berita_daerah_id }}</p>
</div>

<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $komenDaerah->nama }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $komenDaerah->email }}</p>
</div>

<!-- Komen Field -->
<div class="col-sm-12">
    {!! Form::label('komen', 'Komen:') !!}
    <p>{{ $komenDaerah->komen }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $komenDaerah->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $komenDaerah->updated_at }}</p>
</div>

