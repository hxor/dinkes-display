@extends('layouts.app')

@push('styles')
    <!-- Datatables -->
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Schedule</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Admin</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li class="active">
                    Schedule
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    Datatable
                    <a href="{{ route('user.schedule.create') }}" class="btn btn-sm btn-primary btn-custom pull-right waves-effect modal-show" title="Create Resource"><i class="fa fa-plus"></i> Create</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <table id="datatable"
                        class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Graha</th>
                                <th>Kegiatan</th>
                                <th>Tanggal Mulai</th>
                                <th>Jam Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Jam Selesai</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->
@endsection

@push('scripts')
    <!-- Datatables -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('table.schedule') }}",
                columns: [
                    {data: 'DT_Row_Index', name: 'id'},
                    {data: 'graha.title', name: 'graha.title'},
                    {data: 'date_start', name: 'date_start'},
                    {data: 'clock_start', name: 'clock_start'},
                    {data: 'date_end', name: 'date_end'},
                    {data: 'clock_end', name: 'clock_end'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>

    <!-- Sweetalert2 -->
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
@endpush
