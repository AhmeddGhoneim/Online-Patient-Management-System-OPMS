


   <script src="{{ url('/front') }}/js/jquery.min.js"></script>
  <script src="{{ url('/front') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ url('/front') }}/js/popper.min.js"></script>
  <script src="{{ url('/front') }}/js/bootstrap.min.js"></script>
  <script src="{{ url('/front') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ url('/front') }}/js/jquery.waypoints.min.js"></script>
  <script src="{{ url('/front') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ url('/front') }}/js/owl.carousel.min.js"></script>
  <script src="{{ url('/front') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ url('/front') }}/js/aos.js"></script>
  <script src="{{ url('/front') }}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ url('/front') }}/js/bootstrap-datepicker.js"></script>
  <script src="{{ url('/front') }}/js/jquery.timepicker.min.js"></script>
  <script src="{{ url('/front') }}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ url('/front') }}/js/google-map.js"></script>
  <script src="{{ url('/front') }}/js/main.js"></script>

  <script>
     $(document).ready(function(){
         $('#category_select').on('change',function(){
           var id= $(this).find(":selected").val();
           if(id!==''){
            $.ajax({
               url:'{{ Route("ajax.doctors") }}',
               type:'post',
               data:{
                  "_token": "{{ csrf_token() }}",
                  'id':id
               },

               success:function(response){
                  $('#doctor_select').html(response.data);
               }

            });
           }
           
         });
     });
  </script>
    