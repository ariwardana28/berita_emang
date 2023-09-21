<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>
        @if($slide->status == '0')
            <span class="badge bg-danger">Hidden</span>
        @else
            <span class="badge bg-success">Overview</span>
        @endif
    </p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p>
        <img src="{!! asset('data/slide') !!}/{{ $slide->foto }}" style="width: 10%">
    </p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $slide->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $slide->updated_at }}</p>
</div>

