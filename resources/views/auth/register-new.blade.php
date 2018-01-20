
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

  </head>

  <body>
<div class="pattern">
  
</div>
    <div class="container">

      <div class="row">
        <div class="col-lg-6" style="float: none;margin:0 auto;">
        <div class="card">
          
          <div class="card-body">
 <form class="form-signin" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

        

        <h2 class="form-signin-heading">Register</h2>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Nama</label>


                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>



                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Password</label>

                    
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
       
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Konfirmasi Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        <div class="form-group">
                            <label for="password-confirm" class=" control-label">Jenis Kelamin</label>

                     
                                <select class="form-control" name="gender">  
                                    <option value="laki-laki">Laki - Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                   
                        </div>
                        <div class="form-group">
                            <label  >Nomor Hp</label>

                                    <input type="number" name="phone" class="form-control" value="{{ old('phone') }}">

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                            </div>      </form>
          </div>
        </div>
        </div>
      </div>

    </div> 

    <style type="text/css">
      body {

  padding-bottom: 40px;
  background-color: #eee;
}
.container{
  padding-top: 50px;
}
.pattern{
  height: 40%;
  float: left;
  position: fixed;
  background: red;
  width: 100%;
  top: 0;
}
.form-signin {
  max-width: 80%;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input {
  margin-bottom: -1px;
}
.form-signin input {
  margin-bottom: 10px;
}
    </style>
  </body>
</html>
