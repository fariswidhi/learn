<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{@asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>


<div class="container">
  


    
    <div class="col-md-6" style="float: none;margin:0 auto;">
      <section class="login-form"> 
      <form role="login" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
          


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
                            <label for="password-confirm" class="control-label">Nomor Hp</label>

                                    <input type="number" name="phone" class="form-control">

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
        </form>
        

      </section>  
      </div>
      
      

  </div>
  
  <!-- <p>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank"><small>HTML</small><sup>5</sup></a>
    <br>
    <br>
    
  </p>      -->
  
  

<style type="text/css">


/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
    outline: none;
}

    .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;

    }

body {
    background-color: #3498db;
}

.login-form {
    margin-top: 60px;
}

form[role=login] {
    color: #5d5d5d;
    background: #f2f2f2;
    padding: 26px;
}
    form[role=login] img {
        display: block;
        margin: 0 auto;
        margin-bottom: 35px;
    }
    form[role=login] input,
    form[role=login] button {
        font-size: 18px;
        margin: 16px 0;
    }
    form[role=login] > div {
        text-align: center;
    }
    
.form-links {

    margin-top: 1em;
    margin-bottom: 50px;
}
    .form-links a {
        color: #fff;
    }
    label{
        float: left;
    }
</style>
<script src="{{@asset('bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>

