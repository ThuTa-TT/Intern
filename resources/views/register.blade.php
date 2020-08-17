<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

<section>
	<div class="container">
		<div class="col-sm-6">
		<form method="post" action="{{route('ereg')}}">
			@csrf
			<h2>Employee Register Form</h2>
			<div class="form-group">
   				<label >ID: </label>
    			<input type="number" class="form-control" id="id" name="id" aria-describedby="emailHelp">
  			</div>
			<div class="form-group">
   				<label >Name: </label>
    			<input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  			</div>
  			<div class="form-group">
   				<label >DOB:</label>
    			<input type="date" class="form-control" id="dob" name="dob" aria-describedby="emailHelp">
  			</div>
  			<div class="form-group">
   				<label >NRC:</label>
    			<input type="text" class="form-control" id="nrc" name="nrc" aria-describedby="emailHelp">
  			</div>
  			<div class="form-group">
   				<label >Nationality:</label>
    			<input type="text" class="form-control" id="nat" name="nat" aria-describedby="emailHelp">
  			</div>
 			<div class="form-group">
   				<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPassword1">Password</label>
    			<input type="password" class="form-control" id="pwd" name="pwd">
 			</div>
 			
  			<button type="submit" class="btn btn-primary">Submit</button>
  			<button type="reset" class="btn btn-primary">Cancel</button>
		</form>
	</div>
	</div>
</section>
</body>
</html>
