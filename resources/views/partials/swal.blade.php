@if(Session::has('success'))
<script type="text/javascript">
	 Swal.fire(
	      '@lang("dashboard/layouts.success")',
	       ' {!! Session::get('success') !!}',
	      'success'
	    );
</script>
@endif

@if(Session::has('info'))
<div class="padding mb-3" style="padding-bottom: 0px;">
    <div class="alert alert-info" style="margin-bottom: 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {!! Session::get('info') !!}
    </div>
</div>
@endif

@if(Session::has('danger'))
  <script type="text/javascript">
     Swal.fire(
	      'Opss!!',
	       ' {!! Session::get('danger') !!}',
	      'error'
	    );
</script>
@endif


@if (count($errors) > 0)
<?php 
$msg = '';
   foreach ($errors->all() as $error){
	  	$msg .=''.$error.'<br>';
	};
?>
  <script type="text/javascript">
     Swal.fire(
	      'Opss!!',
	       '<?php echo $msg; ?>',
	      'error'
	    );
</script>
@endif
