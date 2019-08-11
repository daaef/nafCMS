  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $message }}</strong>
    </div>
  @endif


  @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $message }}</strong>
    </div>
  @endif
<form method="post" action="{{ route('auth.login.post') }}">
  {{ csrf_field() }}
  <label>Username or email: </label> <br>
  <input type="text" name="login"> <br>
  <label>Password:</label> <br>
  <input type="password" name="password"><br>
  <button>Login</button>
</form>