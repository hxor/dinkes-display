<table class="table table-hover">
    <tr>
        <th>Graha</th>
        <td>{{ $model->graha->title }}</td>
    </tr>
    <tr>
        <th>Kegiatan</th>
        <td>{{ $model->title }}</td>
    </tr>
    <tr>
        <th>Uraian</th>
        <td>{!! $model->desc !!}</td>
    </tr>
    <tr>
        <th>Tanggal Mulai</th>
        <td>{{ $model->date_start }}</td>
    </tr>
    <tr>
        <th>Jam Mulai</th>
        <td>{{ $model->clock_start }}</td>
    </tr>
    <<tr>
        <th>Tanggal Selesai</th>
        <td>{{ $model->date_end }}</td>
    </tr>
    <tr>
        <th>Jam Selesai</th>
        <td>{{ $model->clock_end }}</td>
    </tr>
</table>
