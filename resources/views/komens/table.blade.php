<div class="table-responsive">
    <table class="table" id="komens-table">
        <thead>
        <tr>
            <th>Berita Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Komen</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($komens as $komen)
            <tr>
                <td>{{ $komen->berita_id }}</td>
            <td>{{ $komen->nama }}</td>
            <td>{{ $komen->email }}</td>
            <td>{{ $komen->komen }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['komens.destroy', $komen->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('komens.show', [$komen->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('komens.edit', [$komen->id]) }}"
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
