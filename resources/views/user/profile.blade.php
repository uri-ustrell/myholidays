@extends('layouts.master')

@section('content')

<div class="ownProfileDisplay col">
	<div class="alert alert-danger mx-auto d-inline-block" role="alert">
	  <i>We'll fill these with <b>Angular</b></i>
	</div>

	<form method="POST" id="userRegisterForm" class="userProfileForm  p-4  mx-auto  border  border-secundary  bg-light  rounded" action="{{ route('profile.update') }}">
		<div class="form-group">
			<label for="myLib_reg_user">User </label>
			<input type="text" id="myLib_reg_user" class="form-control  form-control-lg" aria-describedby="userHelpBlock" placeholder="your name" required>
			<small id="userHelpBlock" class="form-text text-muted d-none">max. 30 characters  |  special characters not allowed</small>
		</div>	
		<div class="form-group">
			<label for="myLib_reg_email">Email</label>
			<input type="email" id="myLib_reg_email" class="form-control  form-control-lg" aria-describedby="emailHelpBlock" placeholder="happyUser@mail.com" required>
			<small id="emailHelpBlock" class="form-text text-muted d-none">We'll send you a confirmation</small>
		</div>
		<div class="form-group">
			<label for="myLib_reg_pass">Password</label>
			<input type="password" id="myLib_reg_pass" class="form-control  form-control-lg" aria-describedby="passwordHelpBlock" required>
			<small id="passwordHelpBlock" class="form-text text-muted d-none">must be 6-16 characters long  |  encrypted storage</small>
		</div>
		<div class="form-group">
			<label for="myLib_reg_pass2">Password</label>
			<input type="password" id="myLib_reg_pass2" class="form-control  form-control-lg" aria-describedby="passwordHelpBlock2" required>
			<small id="passwordHelpBlock2" class="form-text text-muted d-none">repeat</small>
		</div>
		<div class="form-group">
			<label for="myLib_reg_postal_code">Department</label>
			<input type="text" id="myLib_reg_dptm" class="form-control  form-control-lg" placeholder="your department" aria-describedby="dptmHelpBlock" required>
			<small id="dptmHelpBlock" class="form-text text-muted d-none">the application needs to know your department</small>
		</div>
		<div class="form-group">
			<label for="myLib_reg_hired">Hired</label>
			<input type="date" id="myLib_reg_hired" class="form-control  form-control-lg" placeholder="10/05/2015" aria-describedby="hiredHelpBlock" required disabled>
			<small id="hiredHelpBlock" class="form-text text-muted d-none">date wehen you were hired</small>
		</div>
		<div class="form-group">
			<label for="myLib_reg_vacations">Vacations</label>
			<input type="number" id="myLib_reg_vacations" class="form-control  form-control-lg" placeholder="23" aria-describedby="vacationsHelpBlock" required disabled>
			<small id="vacationsHelpBlock" class="form-text text-muted d-none">How many days you've got for vacations?</small>
		</div>
		<input type="submit" id="register_user" class="btn  btn-primary  text-uppercase" value="save">
	</form>
</div>
@endsection