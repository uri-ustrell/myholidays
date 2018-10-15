@if(count($errors->all()))
	<div class="alert alert-danger" role="alert">
  		<ul>
  			@foreach($errors->all() as $err)
  				<li>{{ $err }}</li>
 			@endforeach
  		</ul>
	</div>
@endif