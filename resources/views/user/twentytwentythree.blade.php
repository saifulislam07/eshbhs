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
                        <h2 class="title">{{ __('Registration for 2023') }}</h2>
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
                                {{ __('Registration for 2023') }}
                            </h4>
                            <p class="subtitle">
                                {{ __('Register your account to continue.') }}
                            </p>
                        </div>

                        <div class="heading">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>
                        <div class="heading">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <form class="" action="{{ route('user.register.register2023') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input type="hidden" value="2023" name="yearofregistration">
                                    <input required style="border: 1px dotted rgb(239, 14, 14)" class="form-control"
                                        type="text" value="{{ old('name') }}" name="name"
                                        placeholder="{{ __('Enter name as per your certificate') }}">
                                    @if ($errors->has('name'))
                                        <p class="m-1 text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">

                                    <input required autocomplete="off" style="border: 1px dotted rgb(239, 14, 14)"
                                        class="form-control" type="email" name="email" value="{{ old('email') }}"
                                        placeholder="{{ __('Enter Email') }}">
                                    @if ($errors->has('email'))
                                        <p class="m-1 text-danger">{{ $errors->first('email') }}</p>
                                    @endif

                                </div>
                            </div>



                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input required class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="{{ old('fathersname') }}" name="fathersname"
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
                                    <input required class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" name="village" placeholder="{{ __('Enter Village') }}">
                                    @if ($errors->has('village'))
                                        <p class="m-1 text-danger">{{ $errors->first('village') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input required class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" name="occupation" placeholder="{{ __('Enter Occupation') }}">
                                    @if ($errors->has('occupation'))
                                        <p class="m-1 text-danger">{{ $errors->first('occupation') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input required class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="{{ old('phone') }}" name="phone"
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
                                    <select required name="sscyear" style="border: 1px dotted rgb(239, 14, 14)"
                                        id="" class="form-control ">
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
                                <div class="col-md-12 bg-info mb-2 text-white">
                                    Payment Informations
                                </div>
                                <div class="col-md-6 mt-2">

                                    <input class="form-control" required style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="{{ old('frombkash') }}" name="frombkash"
                                        placeholder="{{ __('From Bkash Number') }}">
                                    @if ($errors->has('frombkash'))
                                        <p class="m-1 text-danger">{{ $errors->first('frombkash') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" required style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="{{ old('tobkash') }}" name="tobkash"
                                        placeholder="{{ __('To Bkash Number') }}">
                                    @if ($errors->has('tobkash'))
                                        <p class="m-1 text-danger">{{ $errors->first('tobkash') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" required style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="{{ old('transectionId') }}" name="transectionId"
                                        placeholder="{{ __('Transection ID') }}">
                                    @if ($errors->has('transectionId'))
                                        <p class="m-1 text-danger">{{ $errors->first('transectionId') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-3 mt-2">
                                    <select name="total_members" style="border: 1px dotted rgb(239, 14, 14)" required
                                        class="form-control" id="">
                                        <option value="" disabled selected> Total Members</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <span style="font-size: 8px; color: red;">প্রতি জনের ৫১০ টাকা করে ।
                                        (বিকাশ চার্জ
                                        সহ)</span>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <input class="form-control" required style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="{{ old('amount') }}" name="amount"
                                        placeholder="{{ __('Amount') }}"
                                        @if ($errors->has('amount')) <p class="m-1 text-danger">{{ $errors->first('amount') }}</p> @endif
                                        </div>
                                </div>






                                <button class="main-btn checkbutton" type="submit">{{ __('Registration') }}</button>
                                <p class="reg-text text-center mb-0">
                                    {{ __('রেজিস্ট্রেশনের নিয়ম না বুঝলে ম্যাসেজ পাঠান, ২৪ ঘণ্টার মধ্যে আপনার সাথে যোগাযোগ করা হবে ।') }}
                                    <a class="btn btn-sm btn-success " target="_blank"
                                        href="https://www.facebook.com/ExStudentHBHS">{{ __('SEND MESSAGE') }}</a>
                                </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- <script type="text/javascript">
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
    </script> --}}

    <!-- Register Area End -->

@endsection
