@extends('layouts.app')

@push('styles')
    <style>
    .btn-custom.btn-white { color: #ffffff !important; }
    </style>
    <link href="{{  asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Setting</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Admin</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li class="active">
                    Setting
                </li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::model($model, ['route' => 'admin.setting.store', 'method' => 'POST']) !!}
            <div class="panel panel-color panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Settings
                        <button type="submit" class="btn btn-sm btn-white btn-custom pull-right waves-effect text-white" title="Submit">Save</button>
                    </h3>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    {!! Form::label('title', 'Judul Aplikasi') !!}
                                    {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                                    <small class="text-danger">{{ $errors->first('title') }}</small>
                                </div>

                                <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                    {!! Form::label('logo', 'Logo') !!}
                                    <div class="input-group">
                                    {!! Form::text('logo', null, ['id' => 'thumbnail', 'class' => 'form-control', 'readonly' => 'readonly']) !!}
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-default">
                                        <i class="fa fa-cloud-upload"></i> Choose
                                        </a>
                                    </span>
                                    </div>
                                    @if (isset($model) && $model->logo !== '')
                                    <img src="{{ $model->logo }}" id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
                                    @endif
                                    <img id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
                                    <small class="text-danger">{{ $errors->first('logo') }}</small>
                                </div>

                                <div class="form-group{{ $errors->has('color_header') ? ' has-error ' : '' }}m-b-0">
                                    {!! Form::label('color_header', 'Warna Header') !!}
                                    <div data-color-format="rgb"  class="colorpicker-default input-group colorpicker-element">
                                        {!! Form::text('color_header', null, ['class' => 'form-control', 'id' => 'title', 'required' => 'required', 'readonly']) !!}
                                        <span class="input-group-btn add-on">
                                            <button class="btn btn-white" type="button">
                                                <i style="background-color: rgb(69, 29, 42); margin-top: 2px;"></i>
                                            </button>
                                        </span>
                                        <small class="text-danger">{{ $errors->first('color_header') }}</small>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('color_footer') ? ' has-error ' : '' }}m-b-0">
                                    {!! Form::label('color_footer', 'Warna Footer') !!}
                                    <div data-color-format="rgb"  class="colorpicker-default input-group colorpicker-element">
                                        {!! Form::text('color_footer', null, ['class' => 'form-control', 'id' => 'title', 'required' => 'required', 'readonly']) !!}
                                        <span class="input-group-btn add-on">
                                            <button class="btn btn-white" type="button">
                                                <i style="background-color: rgb(69, 29, 42); margin-top: 2px;"></i>
                                            </button>
                                        </span>
                                        <small class="text-danger">{{ $errors->first('color_footer') }}</small>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('color_clock') ? ' has-error ' : '' }}m-b-0">
                                    {!! Form::label('color_clock', 'Warna Jam') !!}
                                    <div data-color-format="rgb"  class="colorpicker-default input-group colorpicker-element">
                                        {!! Form::text('color_clock', null, ['class' => 'form-control', 'id' => 'title', 'required' => 'required', 'readonly']) !!}
                                        <span class="input-group-btn add-on">
                                            <button class="btn btn-white" type="button">
                                                <i style="background-color: rgb(69, 29, 42); margin-top: 2px;"></i>
                                            </button>
                                        </span>
                                        <small class="text-danger">{{ $errors->first('color_clock') }}</small>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('color_text') ? ' has-error ' : '' }}m-b-0">
                                    {!! Form::label('color_text', 'Warna Running Text') !!}
                                    <div data-color-format="rgb"  class="colorpicker-default input-group colorpicker-element">
                                        {!! Form::text('color_text', null, ['class' => 'form-control', 'id' => 'title', 'required' => 'required', 'readonly']) !!}
                                        <span class="input-group-btn add-on">
                                            <button class="btn btn-white" type="button">
                                                <i style="background-color: rgb(69, 29, 42); margin-top: 2px;"></i>
                                            </button>
                                        </span>
                                        <small class="text-danger">{{ $errors->first('color_text') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-sm btn-primary btn-custom pull-right waves-effect" title="Submit">Save</button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->

@endsection

@push('scripts')
    <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#lfm').filemanager('image');
        });
    </script>

    <script src="{{ url('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
	<script type="text/javascript">
	    jQuery(document).ready(function() {
	        //colorpicker start
	        $('.colorpicker-default').colorpicker({
	            format: 'hex'
	        });
	        $('.colorpicker-rgba').colorpicker();
	    });
	</script>
@endpush
