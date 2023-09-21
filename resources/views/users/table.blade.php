<div class="table-responsive">
    <table class="table" id="$user-table">
        <thead>
        <tr>
            <th>Nama</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $user)
            <tr>
                <td>{{ $user->nama }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
