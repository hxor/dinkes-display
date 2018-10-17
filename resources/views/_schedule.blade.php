<div class="col-md-12">
    <h1>
        <strong>{{ $graha }}</strong>
    </h1>
    <table class="" border="0" style="font-size:21px;">
        <tr>
            <th>Kegiatan</th>
            <td>:</td>
            <td>{{ $data->title ? $data->title : '' }}</td>
        </tr>
        <tr>
            <th>Uraian</th>
            <td>:</td>
            <td>{{ $data->desc ? $data->desc : '' }}</td>
        </tr>
        <tr>
            <th>Mulai</th>
            <td>:</td>
            <td>{{ $data->date_start ? $data->date_start : '' }} {{ $data->clock_start ? $data->clock_start : '' }}</td>
        </tr>

        <tr>
            <th>Selesai</th>
            <td>:</td>
            <td>{{ $data->date_end ? $data->date_end : '' }} {{ $data->clock_end ? $data->clock_end : '' }}</td>
        </tr>
    </table>
</div>
