@extends('layouts.app')
@include('layouts.static-nav')
@section('content')
                <div class="form">
                
                
                    <form  role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-item">
                            <label for="email" >E-Mail Address</label>

                            <div >
                                <input id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span >
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('password') ? ' has-error' : '' }} form-item">
                            <label for="password" >Password</label>

                            <div >
                                <input id="password" type="password"  name="password" required>

                                @if ($errors->has('password'))
                                    <span >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div >
                            <div >
                                <div >
                                    <label>
                                        <input class="form-item" type="checkbox" name="remember" 
                                        {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div >
                            <div >
                                <button type="submit" class="form-item" >
                                    Login
                                </button>

                                <a  href="{{ route('password.request') }}" class="form-item">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        
                    </form>
                
                </div>
@endsection
