@if(Session::has('flash_message'))

	
	<script>
    
  
		   swal({
		  title: "{{ Session::get('flash_message') }}!",
		  text: "تنبيه",
		  imageUrl: 'thumbs-up.jpg'
			});
    </script>
	
@endif