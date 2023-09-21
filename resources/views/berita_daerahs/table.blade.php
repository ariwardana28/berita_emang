<div class="table-responsive">
    <table class="table" id="beritaDaerahs-table">
        <thead>
        <tr>
            <th>Daerah Id</th>
            <th>Judul</th>
            {{--<th>Foto</th>--}}
            {{--<th>Berita</th>--}}
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($beritaDaerahs as $beritaDaerah)
            <tr>
                <td>{{ $beritaDaerah->daerah_id }}</td>
                <td>{{ $beritaDaerah->judul }}</td>
                {{--<td>{{ $beritaDaerah->foto }}</td>--}}
                {{--<td>{{ $beritaDaerah->berita }}</td>--}}
                <td width="120">
                    {!! Form::open(['route' => ['beritaDaerahs.destroy', $beritaDaerah->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('beritaDaerahs.show', [$beritaDaerah->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('beritaDaerahs.edit', [$beritaDaerah->id]) }}"
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
