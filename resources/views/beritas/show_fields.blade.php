<!-- Kategori Id Field -->
<div class="col-sm-12">
    {!! Form::label('kategori_id', 'Kategori Id:') !!}
    <p>{{  $berita->Kategori->nama }}</p>
</div>

<!-- Judul Field -->
<div class="col-sm-12">
    {!! Form::label('judul', 'Judul:') !!}
    <p>{{ $berita->judul }}</p>
</div>


<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p>
        <img src="{!! asset('data/berita') !!}/{!! $berita->foto !!}" style="width: 20%">
    </p>
</div>


<!-- Berita Field -->
<div class="col-sm-12">
    {!! Form::label('berita', 'Berita:') !!}
    <p>{!! $berita->berita !!}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="col-sm-12">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{{ $berita->created_at }}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="col-sm-12">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{{ $berita->updated_at }}</p>--}}
{{--</div>--}}

