@extends('front.layout')

@section('meta-keywords', "$seo->meta_keywords")
@section('meta-description', "$seo->meta_description")
@section('content')

    <!--Main Breadcrumb Area Start -->
    <div class="page-title-area"
        style="background-image: url('{{ asset('assets/front/img/' . $setting->breadcrumb_image) }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <h2 class="title">{{ __('Register') }}</h2>
                        <ul class="breadcrumb-nav">
                            <li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
                            <li class="active" aria-current="page">{{ __('Register') }}</li>
                        </ul>
                    </div> <!-- page title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!--Main Breadcrumb Area End -->

    <!-- Register Area Start -->
    <section class="auth section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="sign-form">
                        <div class="heading">
                            <h4 class="title">
                                {{ __('Register') }}
                            </h4>
                            <p class="subtitle">
                                {{ __('Register your account to continue.') }}
                            </p>
                        </div>
                        <form class="" action="{{ route('user.register.submit') }}" method="POST">
                            @csrf

                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="{{ old('name') }}" name="name"
                                        placeholder="{{ __('Enter Full Name') }}">
                                    @if ($errors->has('name'))
                                        <p class="m-1 text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="{{ old('username') }}"
                                        name="username" placeholder="{{ __('Enter Username') }}">
                                    @if ($errors->has('username'))
                                        <p class="m-1 text-danger">{{ $errors->first('username') }}</p>
                                    @endif
                                </div>
                            </div>



                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="{{ old('phone') }}" name="username"
                                        placeholder="{{ __('Enter Mobile Number') }}">
                                    @if ($errors->has('phone'))
                                        <p class="m-1 text-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="{{ old('alterphone') }}"
                                        name="username" placeholder="{{ __('Enter Alternative Mobile number') }}">
                                    @if ($errors->has('alterphone'))
                                        <p class="m-1 text-danger">{{ $errors->first('alterphone') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="file" name="profilepic"
                                        value="{{ old('profilepic') }}">
                                    @if ($errors->has('profilepic'))
                                        <p class="m-1 text-danger">{{ $errors->first('profilepic') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input autocomplete="off" class="form-control" type="url" name="facebook"
                                        value="{{ old('facebook') }}"
                                        placeholder="{{ __('Enter Facebook  Profile Link') }}">
                                    @if ($errors->has('facebook'))
                                        <p class="m-1 text-danger">{{ $errors->first('facebook') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <select name="bloodgroup" id="" class="form-control ">
                                        <option value="" selected disabled>Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O-">O-</option>
                                        <option value="0">Unknown</option>
                                        @if ($errors->has('bloodgroup'))
                                            <p class="m-1 text-danger">{{ $errors->first('bloodgroup') }}</p>
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <select name="sscyear" id="" class="form-control ">
                                        <option value="" selected disabled>Select SSC Year</option>
                                        @php
                                            
                                            for ($i = 0; $i <= 70; $i++) {
                                                $year = date('Y', strtotime("last day of +$i year")) - 70;
                                                echo "<option name='$year'>$year</option>";
                                            }
                                        @endphp
                                    </select>

                                    @if ($errors->has('sscyear'))
                                        <p class="m-1 text-danger">{{ $errors->first('sscyear') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="col-md-6 mt-2">

                                    <input autocomplete="off" class="form-control" type="email" name="email"
                                        value="{{ old('email') }}" placeholder="{{ __('Enter Email') }}">
                                    @if ($errors->has('email'))
                                        <p class="m-1 text-danger">{{ $errors->first('email') }}</p>
                                    @endif

                                </div>
                                <div class="col-md-6 mt-2"></div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="password" name="password"
                                        placeholder="{{ __('Enter Password') }}">
                                    @if ($errors->has('password'))
                                        <p class="m-1 text-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="password" name="password_confirmation"
                                        placeholder="{{ __('Confirm Password') }}">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    @if ($visibility->is_recaptcha == 1)
                                        <div class="d-block my-4">
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                @php
                                                    $errmsg = $errors->first('g-recaptcha-response');
                                                @endphp
                                                <p class="text-danger mb-0">{{ __("$errmsg") }}</p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <button class="main-btn" type="submit">{{ __('Create Account') }}</button>
                            <p class="reg-text text-center mb-0">{{ __('Already have an acocunt?') }} <a
                                    href="{{ route('user.login') }}">{{ __('Login') }}</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Area End -->

@endsection
