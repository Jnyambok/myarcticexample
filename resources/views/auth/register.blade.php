@extends('authenticationtemplate')

@section('title-content', 'Registration Page')

@section('h4-content','Register Here')

@section('login-regbutton-content')<a class="button button-account" href="{{url('/login')}}">Login here</a>@endsection

@section('login-form-header')<h4>Register Here</h4> @endsection

@section('login-reg-form')




                    <form method="POST"  class="row login_form" action="{{ route('register') }}">
                        @csrf

                       <div class="col-md-12 form-group">

                            
                                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>





                        <div class="col-md-12 form-group">


                                <input id="email" type="email"  placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                        </div>





                        <div class="col-md-12 form-group">
                          
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>




                        <div class="col-md-12 form-group">

                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>




                         <div class="col-md-12 form-group">
                            
                                <button type="submit" class="button button-login w-100">
                                    {{ __('Register') }}
                                </button>



                            </div>
                       
                    </form>
             @endsection
