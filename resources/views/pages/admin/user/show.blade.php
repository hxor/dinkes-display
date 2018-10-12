<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Username</th>
        <th>E-Mail</th>
        <th>Role</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->name }}</td>
        <td>{{ $model->username }}</td>
        <td>{{ $model->email }}</td>
        <td>{{ $model->roles->title }}</td>
    </tr>
</table>
