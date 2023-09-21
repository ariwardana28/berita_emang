<!-- Gambar Field -->
<div class="col-sm-12">
    {!! Form::label('gambar', 'Gambar:') !!}
    <p>{{ $media->gambar }}</p>
</div>

<!-- Media Field -->
<div class="col-sm-12">
    {!! Form::label('media', 'Media:') !!}
    <p>{{ $media->media }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $media->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $media->updated_at }}</p>
</div>

