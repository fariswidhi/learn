@extends('layout.ap')

@section('content')

<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form" >

      <form class="form-signin" method="POST" action="{{ route('login') }}" role="login">
        {{ csrf_field() }}
          {{-- <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" /> --}}

          <center><h2>Login</h2></center>
          <hr>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Email</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="off" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Password</label>

                           
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                </div>

                        <div class="form-group">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>
          
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Masuk</button>
          <div>
            <a class="btn btn-default btn-block btn-lg" href="{{ url('/register') }}">Daftar Sekarang</a> 
          </div>

          </div>
          
        </form>
        

      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>

  
</div>



@endsection