@extends('Layout.index') @section('content')

<form id="myForm" method="get" action="">
	<div class="form-group col-5">
		<label for="thuTu">Thu Tu</label>
		<input class="form-control" id="thuTu" name="thuTu">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
	jQuery.noConflict();
	(function($) {
		$("#myForm").validate({
			rules: {
				thuTu: {
					required: true,
					minlength: 4

				}
			}
		});
	})(jQuery);
</script>
@endsection