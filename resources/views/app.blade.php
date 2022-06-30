<script>
$( document ).ready(function() {
    $('.form-login').on('submit',function(e){
         e.preventDefault();
         var email= $('#email').val();
         var password= $('#password').val();
         var url=$(this).attr('action');
         if(password !== '' && email!==''){
            $.ajax({
                url: url,
                method:'post',
                data:{
                    "_token": "{{ csrf_token() }}",
                    'email':email,
                    'password':password,
                },
                success:function(rsp){
                    $('#button').html(`<div class="loader">Loading...</div>`);
                    if(rsp.status=='error'){
                        $('#button').html(`Login`);
                        Swal.fire(
                            'Incorrect data',
                            '',
                            'info'
                        )
                    }else if (rsp.status=='admin'){
                        window.setTimeout(function(){
                            window.location.href = "{{ Route('dashboard.index') }}";
                        }, 1000);

                    }else if (rsp.status=='doctor'){
                        window.setTimeout(function(){
                            window.location.href = "{{ Route('doctor.panel.index') }}";
                        }, 1000);

                    }else if (rsp.status=='patiant'){
                        window.setTimeout(function(){
                            window.location.href = "{{ url('/') }}";
                        }, 1000);

                    }
                }
            });
        }
    });
 });
</script>