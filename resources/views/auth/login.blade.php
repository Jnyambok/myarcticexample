@extends('authenticationtemplate')

@section('title-content', 'Login Page')

@section('h4-content','Sign Up Here')

@section('login-regbutton-content')<a class="button button-account" href="{{url('/register')}}">Create an Account</a>@endsection
 
@section('login-form-header')<h4>Log In</h4> @endsection

@section('login-reg-form')



                    <form method="POST" class="row login_form"  id="contactForm" action="{{ route('login') }}">
                        @csrf
                       <div class="col-md-12 form-group">
                            
                                <input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        <div class="col-md-12 form-group">
                                             
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                         
                            
                                <div class="form-check">
                                    <input   type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label  for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                    




                       <div class="col-md-12 form-group">

                            
                                <button type="submit" class="button button-login w-100">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                        </div>
                        </form>        
                  @endsection      

