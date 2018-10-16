<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['user.runtext.update', $model->id] : 'user.runtext.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                {!! Form::label('content', 'Isi Running Text') !!}
                {!! Form::textarea('content', null, ['id' => 'content', 'class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                <small class="text-danger">{{ $errors->first('content') }}</small>
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                {!! Form::label('status', 'Tayang ?') !!}
                {!! Form::select('status', [1 => 'Iya', 0 => 'Tidak'], null, ['id' => 'status', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('status') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>
