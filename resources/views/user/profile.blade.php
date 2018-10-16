<?php
	if ( isset($userData) ){
		foreach ($userData as $key => $value) {
			$$key = $value;
		}
	} else {
		$name='';
		$email='';
		$department='';
		$hired='';
		$vacations='';
	}
?>

@extends('layouts.master')

@section('content')
	@if(Session::has('userInfo'))
		<div class="alert alert-success" role="alert">
	  		{{ Session::get('userInfo') }}
		</div>
	@endif
	@include('partials.form-errors')
	<div class="ownProfileDisplay col">
		<form method="POST" id="userRegisterForm" class="userProfileForm  p-4  mx-auto  border  border-secundary  bg-light  rounded" action="{{ route('profile.update') }}">
			<div class="form-group">
				<label for="user">User </label>
				<input name="userName" type="text" id="user" class="form-control  form-control-lg" aria-describedby="userHelpBlock" placeholder="your name" value="{{ $name }}" required>
				<small id="userHelpBlock" class="form-text text-muted d-none">max. 30 characters  |  special characters not allowed</small>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input name="userEmail" type="email" id="email" class="form-control  form-control-lg" aria-describedby="emailHelpBlock" placeholder="happyUser@mail.com" value="{{ $email }}" required>
				<small id="emailHelpBlock" class="form-text text-muted d-none">We'll send you a confirmation</small>
			</div>
			<div class="form-group">
				<label for="pass">Password</label>
				<input name="pass" type="password" id="pass" class="form-control  form-control-lg" aria-describedby="passwordHelpBlock" required>
				<small id="passwordHelpBlock" class="form-text text-muted d-none">must be 6-16 characters long  |  encrypted storage</small>
			</div>
			<div class="form-group">
				<label for="pass2">Password</label>
				<input name="pass2" type="password" id="pass2" class="form-control  form-control-lg" aria-describedby="passwordHelpBlock2" required>
				<small id="passwordHelpBlock2" class="form-text text-muted d-none">repeat</small>
			</div>
			<div class="form-group">
				<label for="dptm">Department</label>
				<input name="dptm" type="text" id="dptm" class="form-control  form-control-lg" placeholder="your department" aria-describedby="dptmHelpBlock" value="@if( is_array($department) ){{ implode(', ', $department) }}@else{{ $department }}@endif" required disabled>
				<small id="dptmHelpBlock" class="form-text text-muted d-none">the application needs to know your department</small>
			</div>
			<div class="form-group">
				<label for="hired">Hired</label>
				<input name="hired" type="date" id="hired" class="form-control  form-control-lg" placeholder="10/05/2015" aria-describedby="hiredHelpBlock" value="{{ $hired }}" required disabled>
				<small id="hiredHelpBlock" class="form-text text-muted d-none">date wehen you were hired</small>
			</div>
			<div class="form-group">
				<label for="vacations">Vacations</label>
				<input name="vacations" type="number" id="vacations" class="form-control form-control-lg" placeholder="23" aria-describedby="vacationsHelpBlock" value="{{ $vacations }}" required disabled>
				<small id="vacationsHelpBlock" class="form-text text-muted d-none">How many days you've got for vacations?</small>
			</div>
			{{ csrf_field() }}
			<input type="submit" id="register_user" class="btn  btn-primary  text-uppercase" value="save">
		</form>
	</div>
@endsection