<div class="table-responsive">
    <table class="table" id="beritas-table">
        <thead>
        <tr>
            <th>Kategori</th>
            <th>Judul</th>
            {{--<th>Berita</th>--}}
            {{--<th>Foto</th>--}}
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($beritas as $berita)
            <tr>
                <td>{{ $berita->Kategori->nama}}</td>
                <td>{{ $berita->judul }}</td>
                {{--<td>{{ $berita->berita }}</td>--}}
                {{--<td>{{ $berita->foto }}</td>--}}
                <td width="120">
                    {!! Form::open(['route' => ['beritas.destroy', $berita->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('beritas.show', [$berita->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('beritas.edit', [$berita->id]) }}"
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
