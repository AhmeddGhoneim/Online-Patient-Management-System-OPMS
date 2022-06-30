@extends('admin::layouts.master')
@section('css')
 <!-- DataTables -->
 <link rel="stylesheet" href="{{ url('/') }}/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="{{ url('/') }}/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="{{ url('/') }}/lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Users</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                            <li class="breadcrumb-item active" aria-current="page"> Users List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>Name </th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Allow Files Type</th>
                            <th>Enroll</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                    
                        <tfoot>
                            <tr>
                                <th>Name </th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Allow Files Type</th>
                                <th>Enroll</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
            </div>

        </section>
    </div>

</div>
@endsection

@section('js')

<!-- DataTables  & Plugins -->
<script src="{{ url('/') }}/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script src="{{ url('/') }}/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/jszip/jszip.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ url('/') }}/lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('/') }}/lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> 
<script>
  $(function () {
    $('#example2').DataTable({
            dom: 'Bfrtlp',
            "responsive": true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print','colvis'
            ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
             "ajax": {
                "url": "{{ route('user.datatable') }}",
                "type": "GET",
                "data": function (d) {
                
                },
            },
            "columns": [
                {data: 'username'},
                {data: 'phone'},
                {data: 'email'},
                {data: 'allow_files'},
                {data: 'enroll'},
                {data: 'action'},
            ],
    });
  });
</script>
@endsection