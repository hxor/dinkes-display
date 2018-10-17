<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['user.schedule.update', $model->id] : 'user.schedule.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('graha_id') ? ' has-error' : '' }}">
                {!! Form::label('graha_id', 'Pilih Graha') !!}
                {!! Form::select('graha_id', $graha, null, ['id' => 'graha_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('graha_id') }}</small>
            </div>

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', 'Nama Kegiatan') !!}
                {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                <small class="text-danger">{{ $errors->first('title') }}</small>
            </div>

            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                {!! Form::label('desc', 'Uraian') !!}
                {!! Form::textarea('desc', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('desc') }}</small>
            </div>

            <div class="form-group{{ $errors->has('date_start') ? ' has-error' : '' }}">
                {!! Form::label('date_start', 'Tanggal Mulai') !!}
                <div class="input-group">
                    {!! Form::text('date_start', null, ['id' => 'date_start', 'class' => 'form-control datepicker', 'required' => 'required']) !!}
                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div>
                <small class="text-danger">{{ $errors->first('date_start') }}</small>
            </div>

            <div class="form-group{{ $errors->has('clock_start') ? ' has-error' : '' }}">
                {!! Form::label('clock_start', 'Jam Mulai') !!}
                <div class="input-group clockpicker " data-placement="top" data-align="top" data-autoclose="true">
                    {!! Form::text('clock_start', null, ['id' => 'clock_start', 'class' => 'form-control', 'required' => 'required']) !!}
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>
                </div>
                <small class="text-danger">{{ $errors->first('clock_start') }}</small>
            </div>

            <div class="form-group{{ $errors->has('date_end') ? ' has-error' : '' }}">
                {!! Form::label('date_end', 'Tanggal Selesai') !!}
                <div class="input-group">
                    {!! Form::text('date_end', null, ['id' => 'date_end', 'class' => 'form-control datepicker', 'required' => 'required']) !!}
                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div>
                <small class="text-danger">{{ $errors->first('date_end') }}</small>
            </div>

            <div class="form-group{{ $errors->has('clock_end') ? ' has-error' : '' }}">
                {!! Form::label('clock_end', 'Jam Selesai') !!}
                <div class="input-group clockpicker " data-placement="top" data-align="top" data-autoclose="true">
                    {!! Form::text('clock_end', null, ['id' => 'clock_end', 'class' => 'form-control', 'required' => 'required']) !!}
                    <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>
                </div>
                <small class="text-danger">{{ $errors->first('clock_end') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>

<script>
    $('.clockpicker').clockpicker({
        donetext: 'Done'
    });
    jQuery('.datepicker').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
    });
</script>
