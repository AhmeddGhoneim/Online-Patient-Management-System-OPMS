

<!DOCTYPE html>
<html lang="en">
  


<head>
    <title>FindUrDoctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
        
        @include('front::layouts.css')
        @yield('css')

  </head>
  <body>

        @include('front::layouts.header')
        
        @yield('content')

        {{-- <div id="map"></div> --}}

        @include('front::layouts.footer')

          <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

            <!-- Modal -->
        <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ Route('make.appointment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Department</label>
                                    <select required name="category_id" id="category_select" class="form-control">
                                        <option value="">Select Department</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="">Doctor</label>
                                <select required name="doctor_id" id="doctor_select" class="form-control">
                                    <option value="">Select Doctor</option>
                                    
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="">Day</label>
                                <input required type="date" name="day" class="form-control" id="">
                            </div>
                            <div class="col-4">
                                <label for="">From</label>
                                <input type="time" class="form-control" name="from">
                            </div>
                            <div class="col-4">
                                <label for="">To</label>
                                <input type="time" class="form-control" name="to">
                            </div>

                            <div class="col-8">
                                <label for="">upload file</label>
                                 <input name="patient_file" class="form-control" type="file" id="formFileMultiple">
                               
                            </div>



                            <div class="col-2"><button  class="btn btn-primary mt-3">Submit</button></div>
                            
                        </div>
                        
                    </form>
                </div>
                
                </div>
            </div>
        </div>

        @include('front::layouts.js')
        @yield('js')
  </body>



  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> -->
    <script>
        var botmanWidget = {
            aboutText: 'ssdsd',
            introMessage: "<img draggable="false" role="img" class="emoji" alt="✋" src="https://s.w.org/images/core/emoji/14.0.0/svg/270b.svg"> Hi! I'm form Tutsmake.org"
        };
    </script>
   
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</html>

      

