<div class="table-responsive">
    <table class="table" id="komenDaerahs-table">
        <thead>
        <tr>
            <th>Berita Daerah Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Komen</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($komenDaerahs as $komenDaerah)
            <tr>
                <td>{{ $komenDaerah->berita_daerah_id }}</td>
            <td>{{ $komenDaerah->nama }}</td>
            <td>{{ $komenDaerah->email }}</td>
            <td>{{ $komenDaerah->komen }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['komenDaerahs.destroy', $komenDaerah->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('komenDaerahs.show', [$komenDaerah->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('komenDaerahs.edit', [$komenDaerah->id]) }}"
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
