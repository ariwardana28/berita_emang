<div class="table-responsive">
    <table class="table" id="media-table">
        <thead>
        <tr>
            <th>Gambar</th>
        <th>Media</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($media as $media)
            <tr>
                <td>{{ $media->gambar }}</td>
            <td>{{ $media->media }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['media.destroy', $media->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('media.show', [$media->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('media.edit', [$media->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
