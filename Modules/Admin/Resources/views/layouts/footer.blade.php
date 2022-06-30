@include('sweetalert::alert')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="{{ url('/') }}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('/') }}/assets/js/pages/dashboard.js"></script>
<script src="{{ url('/') }}/assets/js/main.js"></script>

<script>
    $(".image").change(function() {
     
     if (this.files && this.files[0]) {
     var reader = new FileReader();
     reader.onload = function(e) {
       $('.image-preview').attr('src', e.target.result);
     }
     reader.readAsDataURL(this.files[0]);
   } else {
     alert('select a file to see preview');
     $('.image-preview').attr('src', '');
   }
 });
</script>
@yield('js')