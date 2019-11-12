@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" >

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="session" class="col-md-4 col-form-label text-md-right">{{ __('Preferable Session') }}</label>

                            <div class="col-md-6">
                                <select id="session" class="form-control @error('session') is-invalid @enderror" name="session" value="{{ old('session') }}" required >
                                  <option selected disabled>--Select--</option>
                                  <option value="first">First Session</option>
                                  <option value="second">Second Session</option>
                                  <option value="both">Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="capital" class="col-md-4 col-form-label text-md-right">{{ __('Estimated Start Up Capital') }}</label>

                            <div class="col-md-6">
                                <input id="capital" type="number" class="form-control @error('capital') is-invalid @enderror" name="capital" value="{{ old('capital') }}" required autocomplete="capital" >

                                @error('capital')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="timeline" class="col-md-4 col-form-label text-md-right">{{ __('Number of months') }}</label>

                            <div class="col-md-6">
                                <select id="timeline" class="form-control @error('timeline') is-invalid @enderror" name="timeline" value="{{ old('timeline') }}" required >
                                  <option selected disabled>--Select--</option>
                                  <option value="1">1 Month</option>
                                  <option value="2">2 Months</option>
                                  <option value="3">3 Months</option>
                                  <option value="4">4 Months</option>
                                  <option value="5">5 Months</option>
                                  <option value="6">6 Months</option>
                                  <option value="7">7 Months</option>
                                  <option value="8">8 Months</option>
                                  <option value="9">9 Months</option>
                                  <option value="10">10 Months</option>
                                  <option value="11">11 Months</option>
                                  <option value="12">12 Months</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="timeline" class="col-md-4 col-form-label text-md-right">{{ __('Subscription Month') }}</label>

                            <div class="col-md-6">
                                <select id="subscription_month" class="form-control @error('subscription_month') is-invalid @enderror" name="subscription_month" value="{{ old('subscription_month') }}" required >
                                  <option selected disabled>--Select--</option>
                                  <option value="January">January</option>
                                  <option value="February">February</option>
                                  <option value="March">March</option>
                                  <option value="April">April</option>
                                  <option value="May">May</option>
                                  <option value="June">June</option>
                                  <option value="July">July</option>
                                  <option value="August">August</option>
                                  <option value="September">September</option>
                                  <option value="October">October</option>
                                  <option value="November">November</option>
                                  <option value="December">December</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subscription_cost" class="col-md-4 col-form-label text-md-right">{{ __('Subscription Cost') }}</label>

                            <div class="col-md-6">
                                <input id="subscription_cost" type="number" class="form-control @error('subscription_cost') is-invalid @enderror" name="subscription_cost" value="{{ old('subscription_cost') }}" required autocomplete="subscription_cost" >

                                @error('subscription_cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
