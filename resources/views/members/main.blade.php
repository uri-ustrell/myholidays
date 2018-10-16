<?php 
	/*
	| we'd like get all information from members of department X,
	| then Angular will display based on user interact
	*/
	//array('id_member'=>'name member')
	//$members = array('23'=>'Cloe Patra','44'=>'Carlo Magno','1'=>'Cesar Victus');
?>

@extends('layouts.master')

@section('content')

<div class="membersMenu  row  container-fluid  mb-1">
	<span class="h3  m-0">Members of department</span>
	<div class="addBtn  ml-3  text-muted"><i class="fas fa-plus-circle"></i></div>
</div>
<div class="membersDisplay col">
	<div class="membersList  d-flex  justify-content-start  flex-column  h-100 p-2">
		@foreach($mems as $member)
			<div class="memberOfList  py-1  d-inline-flex  justify-content-start  align-items-center">
				<a href="{{ route('calendar.member', ['member'=>str_replace(' ','-',strtolower($member['name']))])}}" class="d-inline-flex  justify-content-start  align-items-center">
					<i class="fas fa-user  m-2  text-primary"></i>
					<div class="d-inline-flex  flex-column">
						<span class="text-secondary">{{$member['name']}}</span>
						<span class="text-muted">{{$member['id']}}'s boss</span>
					</div>
				</a>
				<div class="memberVacations  d-inline  ml-sm-2  bg-light">
					<p style="font-style: oblique; margin: 0;">we better develop this with <b>Angular</b></p>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection