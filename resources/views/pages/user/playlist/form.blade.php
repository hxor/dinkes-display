<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['user.playlist.update', $model->id] : 'user.playlist.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('media') ? ' has-error' : '' }}">
                {!! Form::label('media', 'Video') !!}
                <div class="input-group">
                {!! Form::text('media', null, ['id' => 'thumbnail', 'class' => 'form-control', 'readonly' => 'readonly']) !!}
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-default">
                    <i class="fa fa-cloud-upload"></i> Choose
                    </a>
                </span>
                </div>
                <small class="text-danger">{{ $errors->first('media') }}</small>
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                {!! Form::label('status', 'Tayang ?') !!}
                {!! Form::select('status', [1 => 'Iya', 0 => 'Tidak'], null, ['id' => 'status', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('status') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>

<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
            $('#lfm').filemanager('file');
        });
</script>
