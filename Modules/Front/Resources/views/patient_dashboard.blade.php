@extends('front::layouts.master')
@section('css')
 <!-- DataTables -->
 <link rel="stylesheet" href="{{ url('/') }}/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="{{ url('/') }}/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="{{ url('/') }}/lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')


<section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url('{{ url("/") }}/front/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="#">Patrient</a></span> <span>Dashborad</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}"> Patient Appointments</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="card">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    
                    <th scope="col">Doctor</th>
                    <th scope="col">date</th>
                    <th scope="col">day</th>
                    <th scope="col">from</th>
                    <th scope="col">to</th>
                    <th scope="col">patient file</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Report</th>
                    <th scope="col">status</th>
                    </tr>
                </thead>
            
                <tfoot>
                  <tr>
                    <th scope="col">#</th>
                    
                    <th scope="col">Doctor</th>
                    <th scope="col">date</th>
                    <th scope="col">day</th>
                    <th scope="col">from</th>
                    <th scope="col">to</th>
                    <th scope="col">patient file</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Report</th>
                    <th scope="col">status</th>
                    </tr>
                </tfoot>
                <tbody>
                  @foreach($patient->appointements as $index=>$one)
                   <tr>
                      <th scope="row">{{$index+1}}</th>
                      <td>{{$one->doctor->name}}</td>
                      <td>{{$one->created_at}}</td>
                      <td>{{$one->day}}</td>
                      <td>{{$one->from}}</td>
                      <td>{{$one->to}}</td>
                      <td>@if ($one->patient_file)
                          <a download href="{{ url('/') }}/public/uploads/image_files/{{ $one->patient_file }}" >Download</a>
                          @else
                            <p>No Files Registered</p>
                          @endif
                      </td>
                      <td>{{$one->doctor_comment}}</td>
                      <td>@if ($one->report)
                          <a download href="{{ url('/') }}/public/uploads/image_files/{{ $one->report }}" >Download</a>
                          @else
                            <p>No Files Registered</p>
                          @endif
                      </td>

                      <td>{{$one->status}}</td>
                   </tr>
                  @endforeach
              </tbody>
              </table>
            </div>
          </div>
    </div>

</section>


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
            "autoWidth": false,
             
            
    });
  });
</script>
@endsection
