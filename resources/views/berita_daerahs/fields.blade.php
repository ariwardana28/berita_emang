<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>

    tinymce.init({
        selector: 'textarea#default',
    });
</script>

<!-- Daerah Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('daerah_id', 'Daerah Id:') !!}
{{--    {!! Form::number('daerah_id', null, ['class' => 'form-control']) !!}--}}
    {{ Form::select('daerah_id', $daerah, null, ['class' => 'form-control', 'placeholder' => '--Pilih Daerah --']) }}

</div>

<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

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


<!-- Berita Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('berita', 'Berita:') !!}
    {!! Form::textarea('berita', null, ['class' => 'form-control','id' => 'default']) !!}
</div>