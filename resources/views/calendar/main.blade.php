<?php 
	/*
	| we'd like get all information from members of department X,
	| then Angular will display based on user interact
	*/

	$memColors = array('#FF9898','#D098FF','#98C6FF','#FF98EF','#98EDFF','#98FFB0','#C1FF98','#989AFF','#E1FF98','#FFEF98','#FFC898');
?>

@extends('layouts.master')

@section('content')

<div class="calendarMenu  row  container-fluid">
	<div class="calendarUsers  d-inline-flex  justify-content-between  align-items-center  flex-wrap">
		@if( isset($mem) )
			<i style="color:{{ $memColors[array_rand($memColors)] }}" class="fas fa-user  m-1"></i>
			<div class="d-inline d-flex flex-column">
				<span class="text-secondary">{{ $mem['name'] }}</span>
				<span class="text-muted">{{ $mem['id'] }}'s boss</span>
			</div>
		@else
			@foreach($mems as $key => $mem)
				<i style="color:{{ $memColors[$key] }}" class="fas fa-user  m-1"></i>
				<div class="d-inline d-flex flex-column">
					<span class="text-secondary">{{ $mem['name'] }}</span>
					<span class="text-muted">{{ $mem['id'] }}'s boss</span>
				</div>
			@endforeach
		@endif
	</div>
	<div class="addBtn  ml-3  text-muted"><i class="fas fa-plus-circle"></i></div>
	<div class="editBtn  ml-3  text-muted"><i class="fas fa-highlighter"></i></div>
</div>
<div class="calendarDisplay col bg-light">
	<center class="w-100 h-100 d-flex  flex-column  align-items-center  justify-content-center">
		<h1>GOOGLE calendar APIrest</h1>
		<h3><i>we better develop this with <b>Angular</b></i></h3>
	</center>
</div>

@endsection