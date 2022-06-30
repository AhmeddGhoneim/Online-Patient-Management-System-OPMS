@extends('doctor::layouts.master')
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
                    <h3>Appointments</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Doctor</li>
                            <li class="breadcrumb-item active" aria-current="page"> Appointments List</li>
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
                                <th>Patient Name</th>
                                <th>Day</th>
                                <th>from</th>
                                <th>to</th>
                                <th>patient file</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>midical History</th>
                            </tr>
                        </thead>
                    
                        <tfoot>
                            <tr>
                                <th>Patient Name</th>
                                <th>Day</th>
                                <th>from</th>
                                <th>to</th>
                                <th>patient file</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>midical History</th>

                            </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
            </div>

        </section>
    </div>

    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Add Comment</h5>
                    <button type="button" class="close rounded-pill"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ Route('doctor.comment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="input_hidden" type="hidden" name="id">
                        <textarea name="doctor_comment" class="form-control"></textarea>

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Report</label>
                            <input name="report" class="form-control" type="file" id="formFileMultiple">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button class="btn btn-primary rounded-pill ">Submit</button>
                </div>
            </form>
            </div>
        </div>
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
                "url": "{{ route('doctor.appointment.datatable') }}",
                "type": "GET",
                "data": function (d) {
                
                },
            },
            "columns": [
                {data: 'patient'},
                {data: 'day'},
                {data: 'from'},
                {data: 'to'},
                {data: 'patient_file'},
                // {data: 'date'},
                {data: 'doctor_comment'},
                {data: 'status'},
                {data: 'midical_history'},
            ],
    });
  });
</script>
<script>
    $(document).ready(function(){
        $('#example2 tbody').on('click', '.comment', function () {
           var id = $(this).data('id');
           $('#input_hidden').val(id);
        });
    });
</script>
@endsection