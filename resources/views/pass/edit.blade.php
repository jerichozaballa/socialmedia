@extends('layouts.app')

@section('content')

<br>

<div class="row">

<div class="col-sm-3">
</div>

<div class="col-sm-6">


	<div class="card bx" style="">
    <div class="card-header bg-secondary"><h3 style="color:#fff">Change Password:</h3></div>
    <div class="card-body">
    <form action="{{ route('pass.update', ['user' => $user]) }}" method="POST">
    @method('PATCH')
    	<div class="form-group">
    		<label for="password">New Password:</label>
	      	<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="New Password">
	      	@error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
	    </div>
	    <div class="form-group">
	    	<label for="password-confirm">Confirm New Password:</label>
	      	<input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm New Password">
	      	@error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
	    </div>

	   	<br>
      <hr>
      	@csrf
      	<button type="submit" class="btn btn-secondary">Submit</button>
    </form>
    </div>
  	</div>


</div>

<div class="col-sm-3">
</div>

</div> 
@endsection