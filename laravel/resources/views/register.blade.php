@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br />
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
		
	</ul>
</div>
@endif

<h1>Form Register</h1>
<form action="{{ url('register') }}" method="POST">
	@csrf
	
	Username: <input type="text" name="username" /><br/>
	Password: <input type="password" name="password" /><br/> 
	ReType Password: <input type="password" name="password_confirmation" /><br/>
	
	
	<input type="submit" value="Login" />
</form>