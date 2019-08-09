@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br />
	<ul>
		@foreach ($errors->all () as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<h1>Form Login</h1>
<form action="{{ url('login') }}" method="POST">
	@csrf
	
	Username: <input type ="text" name="username" /><br/>
	Password: <input type ="password" name="password" /><br/>
	
	<input type ="submit" name="Login" /><br/>
</form>