<?php 
	/*
	| we'd like get all information from members of department X,
	| then Angular will display based on user interact
	*/
	//array('id_member'=>'name member')
	$members = array('23'=>'Cloe Patra','44'=>'Carlo Magno','1'=>'Cesar Victus');

	$memColors = array('#FF9898','#D098FF','#98C6FF','#FF98EF','#98EDFF','#98FFE6','#B0FF98','#989AFF','#E1FF98','#FFEF98','#FFC898');
?>

@extends('layouts.master')

@section('content')

<div class="calendarMenu  row  container-fluid">
	<div class="calendarUsers  d-inline-flex  justify-content-between  align-items-center">
		@foreach($members as $id_member => $memberName)
			<i style="color:{{$memColors[ array_search($memberName,array_values($members)) ]}}" class="fas fa-user  m-1"></i>
			<div class="d-inline d-flex flex-column">
				<span class="text-secondary">{{$memberName}}</span>
				<span class="text-muted">{{$id_member}}'s boss</span>
			</div>
		@endforeach
	</div>
	<div class="addBtn  ml-3  text-muted"><i class="fas fa-plus-circle"></i></div>
	<div class="editBtn  ml-3  text-muted"><i class="fas fa-highlighter"></i></div>
</div>
<div class="calendarDisplay col bg-light">
	<center class="w-100 h-100 d-flex  flex-column  align-items-center  justify-content-center">
		<h1>GOOGLE calendar APIrest</h1>
		<h3><i>we better develop this with Angular</i></h3>
	</center>
</div>

@endsection