<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['admin.graha.update', $model->id] : 'admin.graha.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', 'Nama Graha') !!}
                {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                <small class="text-danger">{{ $errors->first('title') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>
