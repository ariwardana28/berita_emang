<!-- Daerah Id Field -->
<div class="col-sm-12">
    {!! Form::label('daerah_id', 'Daerah Id:') !!}
    <p>{{ $beritaDaerah->daerah_id }}</p>
</div>

<!-- Judul Field -->
<div class="col-sm-12">
    {!! Form::label('judul', 'Judul:') !!}
    <p>{{ $beritaDaerah->judul }}</p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{
        <img src="{!! asset('data/beritaDaerah') !!}/{!! $beritaDaerah->foto !!}" style="width: 20%">
    </p>
</div>

<!-- Berita Field -->
<div class="col-sm-12">
    {!! Form::label('berita', 'Berita:') !!}
    <p>{!! $beritaDaerah->berita !!}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $beritaDaerah->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $beritaDaerah->updated_at }}</p>
</div>

