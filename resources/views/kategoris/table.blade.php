<div class="table-responsive">
    <table class="table" id="kategoris-table">
        <thead>
        <tr>
            <th>Nama</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kategoris as $kategori)
            <tr>
                <td>{{ $kategori->nama }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['kategoris.destroy', $kategori->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kategoris.show', [$kategori->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('kategoris.edit', [$kategori->id]) }}"
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
