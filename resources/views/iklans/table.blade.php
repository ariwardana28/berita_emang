<div class="table-responsive">
    <table class="table" id="iklans-table">
        <thead>
        <tr>
            <th>Foto</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($iklans as $iklan)
            <tr>
                <td>{{ $iklan->foto }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['iklans.destroy', $iklan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('iklans.show', [$iklan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('iklans.edit', [$iklan->id]) }}"
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
