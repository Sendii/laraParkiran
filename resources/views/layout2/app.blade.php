<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Parkiran</title>
	<link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
	<style>
		body {
			overflow: hidden;
		}
	</style>
</head>
<body>
	@include('layout2.nav')
	<div class="row mt-5">
		<div class="container">
			@yield('content')
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.datepicker').datepicker({
				format: 'mm-dd-yyyy',
				startDate: '-3d'
			});
		})
	</script>
</body>
</html>