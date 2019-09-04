@extends('layouts.app')

@section('content')

<br>

<div class="row">

<div class="col-sm-3">
</div>

<div class="col-sm-6">


	<div class="card bx" style="">
    <div class="card-header bg-secondary"><h3 style="color:#fff">Edit Profile:</h3></div>
    <div class="card-body">
    <form action="{{ route('homes.update', ['user' => $user]) }}" method="POST">
    @method('PATCH')
    	<div class="form-group">
    		<label for="first">First Name:</label>
	      	<input type="text" class="form-control" id="first" name="first" placeholder="First Name" 
	      	value="{{old('first') ?? $user->first }}">
	      	<div>{{ $errors->first('first') }}</div>
	    </div>
	    <div class="form-group">
	    	<label for="last">Last Name:</label>
	      	<input type="text" class="form-control" id="last" name="last" placeholder="Last Name"
	      	value="{{old('last') ?? $user->last }}">
	      	<div>{{ $errors->first('last') }}</div>
	    </div>
	    <div class="form-group">
	    	<label for="bday">Birthday:</label>
	      	<input type="date" class="form-control" id="bday" name="bday"
	      	value="{{old('bday') ?? $user->bday }}">
	      	<div>{{ $errors->first('bday') }}</div>
	    </div>
	    <div class="form-group">
	    	<label for="email">Email:</label>
	      	<input type="text" class="form-control" id="email" name="email" placeholder="Email"
	      	value="{{old('email') ?? $user->email }}">
	      	<div>{{ $errors->first('email') }}</div>
	    </div>
	   	<br>
      <hr>
      	@csrf
      	<button type="submit" class="btn btn-secondary">Submit Post</button>
    </form>
    </div>
  	</div>


</div>

<div class="col-sm-3">
</div>

</div> 
@endsection