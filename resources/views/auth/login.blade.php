<form method="post" action="{{ route('auth.login.post') }}">
  {{ csrf_field() }}
  <label>Username or email: </label> <br>
  <input type="text" name="login"> <br>
  <label>Password:</label> <br>
  <input type="password" name="password"><br>
  <button>Login</button>
</form>