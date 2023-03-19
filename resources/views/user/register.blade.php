@extends('front.layout')

@section('meta-keywords', "$seo->meta_keywords")
@section('meta-description', "$seo->meta_description")
@section('content')

    <style>
        .some-class {
            float: left;
            clear: none;
        }

        fieldset {
            overflow: hidden
        }

        input[type=radio],
        input.radio {
            float: left;
            clear: none;
            margin: 2px 0 0 2px;
        }
    </style>
    <!--Main Breadcrumb Area Start -->
    <div class="page-title-area"
        style="background-image: url('{{ asset('assets/front/img/' . $setting->breadcrumb_image) }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <h2 class="title">{{ __('Registration for membership') }}</h2>
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
                                {{ __('Registration for membership') }}
                            </h4>
                            <p class="subtitle">
                                {{ __('Register your account to continue.') }}
                            </p>
                        </div>
                        <form class="" action="{{ route('user.register.submit') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input style="border: 1px dotted rgb(239, 14, 14)" class="form-control" type="text"
                                        value="{{ old('name') }}" name="name"
                                        placeholder="{{ __('Enter name as per your certificate') }}">
                                    @if ($errors->has('name'))
                                        <p class="m-1 text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control username" onkeyup="usernamevalidation(this.value)"
                                        style="border: 1px dotted rgb(239, 14, 14)" type="text"
                                        value="{{ old('username') }}" name="username"
                                        placeholder="{{ __('Enter Username') }}">
                                    <span style="color: red; display: none" id="usernamecheck">User Name Already
                                        Exist</span>
                                    @if ($errors->has('username'))
                                        <p class="m-1 text-danger">{{ $errors->first('username') }}</p>
                                    @endif
                                </div>
                            </div>



                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" style="border: 1px dotted rgb(239, 14, 14)" type="text"
                                        value="{{ old('fathersname') }}" name="fathersname"
                                        placeholder="{{ __('Enter Fathers Name') }}">
                                    @if ($errors->has('fathersname'))
                                        <p class="m-1 text-danger">{{ $errors->first('fathersname') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="{{ old('mathersname') }}"
                                        name="mathersname" placeholder="{{ __('Enter Mothers Name') }}">
                                    @if ($errors->has('mathersname'))
                                        <p class="m-1 text-danger">{{ $errors->first('mathersname') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" style="border: 1px dotted rgb(239, 14, 14)" type="text"
                                        name="village" placeholder="{{ __('Enter Village') }}">
                                    @if ($errors->has('village'))
                                        <p class="m-1 text-danger">{{ $errors->first('village') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" style="border: 1px dotted rgb(239, 14, 14)" type="text"
                                        name="occupation" placeholder="{{ __('Enter Occupation') }}">
                                    @if ($errors->has('occupation'))
                                        <p class="m-1 text-danger">{{ $errors->first('occupation') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" style="border: 1px dotted rgb(239, 14, 14)" type="text"
                                        value="{{ old('phone') }}" name="phone"
                                        placeholder="{{ __('Enter Mobile Number') }}">
                                    @if ($errors->has('phone'))
                                        <p class="m-1 text-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="{{ old('alterphone') }}"
                                        name="alterphone" placeholder="{{ __('Enter Alternative Mobile number') }}">
                                    @if ($errors->has('alterphone'))
                                        <p class="m-1 text-danger">{{ $errors->first('alterphone') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <fieldset>
                                        <div class="some-class">
                                            <input type="radio" class="radio" name="gender" value="Male"
                                                id="y" checked />
                                            <label for="y"
                                                style=" float: left; clear: none;display: block;padding: 0px 1em 0px 8px; margin-top: 18px;">
                                                Male</label>
                                            <input type="radio" class="radio" name="gender" value="Femele"
                                                id="z" />
                                            <label for="z"
                                                style=" float: left; clear: none; display: block; padding: 0px 1em 0px 8px; margin-top: 18px;">
                                                Femele</label>
                                        </div>
                                    </fieldset>


                                    @if ($errors->has('gender'))
                                        <p class="m-1 text-danger">{{ $errors->first('gender') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">

                                    <input class="form-control" type="file" name="profilepic"
                                        value="{{ old('profilepic') }}">
                                    <span style="font-size: 9px">Profile image (Maximum 1MB)</span>
                                    @if ($errors->has('profilepic'))
                                        <p class="m-1 text-danger">{{ $errors->first('profilepic') }}</p>
                                    @endif
                                </div>

                            </div>

                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <select name="bloodgroup" style="border: 1px dotted rgb(239, 14, 14)" id=""
                                        class="form-control ">
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
                                    <select name="sscyear" style="border: 1px dotted rgb(239, 14, 14)" id=""
                                        class="form-control ">
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
                                    <input autocomplete="off" class="form-control" type="url" name="facebook"
                                        value="{{ old('facebook') }}"
                                        placeholder="{{ __('Enter Facebook  Profile Link') }}">
                                    @if ($errors->has('facebook'))
                                        <p class="m-1 text-danger">{{ $errors->first('facebook') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">

                                    <input autocomplete="off" style="border: 1px dotted rgb(239, 14, 14)"
                                        class="form-control" type="email" name="email" value="{{ old('email') }}"
                                        placeholder="{{ __('Enter Email') }}">
                                    @if ($errors->has('email'))
                                        <p class="m-1 text-danger">{{ $errors->first('email') }}</p>
                                    @endif

                                </div>

                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="password" name="password" placeholder="{{ __('Enter Password') }}">
                                    @if ($errors->has('password'))
                                        <p class="m-1 text-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="password" name="password_confirmation"
                                        placeholder="{{ __('Confirm Password') }}">
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="col-md-6 mt-2 offset-md-4">
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

                            <button class="main-btn checkbutton" type="submit">{{ __('Create Account') }}</button>
                            <p class="reg-text text-center mb-0">{{ __('Already have an acocunt?') }} <a
                                    href="{{ route('user.login') }}">{{ __('Login') }}</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function usernamevalidation(username) {
            $.ajax({
                "url": "{{ route('user.check_username') }}",
                "type": "GET",
                cache: false,
                data: {
                    // "_token": "{{ csrf_token() }}",
                    username: username
                },
                success: function(data) {
                    // alert(data);
                    if (data == 1) {
                        $('#usernamecheck').show();
                        $('.checkbutton').attr('disabled', 'disabled');
                    } else {

                        $('#usernamecheck').hide();
                        $('.checkbutton').removeAttr('disabled');
                    }

                }
            });

        }
    </script>

    <!-- Register Area End -->

@endsection
