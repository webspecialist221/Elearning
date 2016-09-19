@extends('layouts.app')

@section('content')
<div class="widget">
<div class="login-content">
  <div class="widget-content" style="padding-bottom:0;">
  <form role="form" method="POST" action="{{ url('/login') }}" class="no-margin">
                {!! csrf_field() !!}
                <h3 class="form-title">Login to Admin Panel</h3>
                
                <fieldset>
                    <div class="form-group no-margin">
                        <label for="email">Email</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-user"></i>
                                </span>    
                            <input type="email" name="email" placeholder="Your Email" class="form-control input-lg" id="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-lock"></i>
                                </span>    
                            <input type="password" name="password" placeholder="Your Password" class="form-control input-lg" id="password">
                            
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>
                </fieldset>
               <div class="form-actions">
                <label class="checkbox">
                {{-- <div class="checker"><span><input type="checkbox" value="1" name="remember"></span></div> --}} {{-- Remember me --}}
                </label>
                <button class="btn btn-warning pull-right" type="submit">
                Login <i class="m-icon-swapright m-icon-white"></i>
                </button> 
                <!-- <div class="forgot"><a href="#" class="forgot">Forgot Username or Password?</a></div> -->           
            </div>
            
            
            </form>
  
  
  </div>
   </div>
</div>
@endsection
