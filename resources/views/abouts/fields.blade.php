<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>

    tinymce.init({
        selector: 'textarea#default',
    });
</script>
<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12">
    {!! Form::label('text', 'Text:') !!}
    {{--{!! Form::text('text', null, ['class' => 'form-control']) !!}--}}
    {!! Form::textarea('text', null, ['class' => 'form-control','id' => 'default']) !!}

</div>