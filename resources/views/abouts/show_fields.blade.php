<!-- Judul Field -->
<div class="col-sm-12">
    {!! Form::label('judul', 'Judul:') !!}
    <p>{{ $about->judul }}</p>
</div>

<!-- Text Field -->
<div class="col-sm-12">
    {!! Form::label('text', 'Keterangan:') !!}
    <p>{!! $about->text !!}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="col-sm-12">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{{ $about->created_at }}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="col-sm-12">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{{ $about->updated_at }}</p>--}}
{{--</div>--}}

