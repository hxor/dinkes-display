<table class="table table-hover">
    <tr>
        <th>Video</th>
        <td>
            <video src="{{ $model->media }}" height="215" controls></video>
        </td>
    </tr>
    <tr>
        <th>Tayang ?</th>
        <td>{{ $model->status == 1 ? 'Iya' : 'Tidak' }}</td>
    </tr>
</table>
