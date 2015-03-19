@if (Session::has('flash_message'))
    <div class="alert alert-{{Session::get('flash_type', 'success')}} alert-dismisyasible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        {{ Session::get('flash_message') }}
    </div>
@endif