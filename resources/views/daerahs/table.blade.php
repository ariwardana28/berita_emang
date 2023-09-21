<div class="table-responsive">
    <table class="table" id="daerahs-table">
        <thead>
        <tr>
            <th>Nama</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($daerahs as $daerah)
            <tr>
                <td>{{ $daerah->nama }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['daerahs.destroy', $daerah->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('daerahs.show', [$daerah->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('daerahs.edit', [$daerah->id]) }}"
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
