@if (session()->has('flash_message'))
	
	<script>
        swal({
            title: "{{ session('flash_message.title')}}",
            text: "{{ session('flash_message.message') }}",
            type: "{{ session('flash_message.state') }}",
            timer: 1800,
            showConfirmButton: false,
        });
    </script>

@endif

@if (session()->has('flash_message_persistent'))
	
	<script>
        swal({
            title: "{{ session('flash_message_persistent.title')}}",
            text: "{{ session('flash_message_persistent.message') }}",
            type: "{{ session('flash_message_persistent.state') }}",
            confirmButtonText:  'Got it'
        });
    </script>

@endif