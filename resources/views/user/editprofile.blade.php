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
                        <h2 class="title">{{ __('Edit Profile') }}</h2>
                        <ul class="breadcrumb-nav">
                            <li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
                            <li class="active" aria-current="page">{{ __('Edit Profile') }}</li>
                        </ul>
                    </div> <!-- page title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--Main Breadcrumb Area End -->

    <!-- User Dashboard Start -->
    <section class="user-dashboard-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @includeif('user.dashboard-sidenav')
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header">{{ __('Edit Profile') }}</h5>
                                <div class="card-body">
                                    <form action="{{ route('user.updateprofile', Auth::user()->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <div class="form-group mb-4 text-center">
                                                    <div class="upload-img d-inline">
                                                        <div class="img">
                                                            <img class="mb-3 show-img img-demo"
                                                                src="
                                              @if (Auth::user()->profilepic) {{ asset('profilepic/' . Auth::user()->profilepic) }}
                                              @else
                                              {{ asset('assets/admin/img/img-demo.jpg') }} @endif"
                                                                alt="">
                                                        </div>
                                                        <div class="file-upload-area">
                                                            <div class="upload-file">
                                                                <input type="file" name="profilepic"
                                                                    class="upload image form-control up-img">
                                                            </div>
                                                            @if ($errors->has('profilepic'))
                                                                <p class="m-1 text-danger">
                                                                    {{ $errors->first('profilepic') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('First Name') }}</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ Auth::user()->name }}">
                                                    @if ($errors->has('name'))
                                                        <p class="m-1 text-danger">{{ $errors->first('name') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('User Name') }}</label>
                                                    <input type="text" class="form-control" name="username"
                                                        value="{{ Auth::user()->username }}">
                                                    @if ($errors->has('username'))
                                                        <p class="m-1 text-danger">{{ $errors->first('username') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Email') }}</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ Auth::user()->email }}">
                                                    @if ($errors->has('email'))
                                                        <p class="m-1 text-danger">{{ $errors->first('email') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Phone') }}</label>
                                                    <input type="text" class="form-control" name="phone"
                                                        value="{{ Auth::user()->phone }}">
                                                    @if ($errors->has('phone'))
                                                        <p class="m-1 text-danger">{{ $errors->first('phone') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Alternative Phone') }}</label>
                                                    <input type="text" class="form-control" name="alterphone"
                                                        value="{{ Auth::user()->alterphone }}">
                                                    @if ($errors->has('alterphone'))
                                                        <p class="m-1 text-danger">{{ $errors->first('alterphone') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Occupation') }}</label>
                                                    <input type="text" class="form-control" name="occupation"
                                                        value="{{ Auth::user()->occupation }}">
                                                    @if ($errors->has('occupation'))
                                                        <p class="m-1 text-danger">{{ $errors->first('occupation') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Father Name') }}</label>
                                                    <input type="text" class="form-control" name="fathersname"
                                                        value="{{ Auth::user()->fathersname }}">
                                                    @if ($errors->has('fathersname'))
                                                        <p class="m-1 text-danger">{{ $errors->first('fathersname') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Mother name') }}</label>
                                                    <input type="text" class="form-control" name="mathersname"
                                                        value="{{ Auth::user()->mathersname }}">
                                                    @if ($errors->has('mathersname'))
                                                        <p class="m-1 text-danger">{{ $errors->first('mathersname') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Gendar') }}</label>
                                                    <fieldset>
                                                        <div class="some-class">
                                                            <input <?php if (Auth::user()->gender == 'Male') {
                                                                echo 'checked';
                                                            } ?> type="radio" class="radio"
                                                                name="gender" value="Male" id="y" />
                                                            <label for="y"
                                                                style=" float: left; clear: none;display: block;padding: 0px 1em 0px 8px; margin-top: -5px;">
                                                                Male</label>
                                                            <input <?php if (Auth::user()->gender == 'Female') {
                                                                echo 'checked';
                                                            } ?> type="radio" class="radio"
                                                                name="gender" value="Female" id="z" />
                                                            <label for="z"
                                                                style=" float: left; clear: none; display: block; padding: 0px 1em 0px 8px; margin-top: -5px;">
                                                                Femele</label>
                                                        </div>
                                                    </fieldset>


                                                    @if ($errors->has('gender'))
                                                        <p class="m-1 text-danger">{{ $errors->first('gender') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Blood Group') }}</label>
                                                    <select name="bloodgroup" style="border: 1px dotted rgb(239, 14, 14)"
                                                        id="" class="form-control ">
                                                        <option value="" selected disabled>Select Blood Group
                                                        </option>
                                                        <option <?php if (Auth::user()->bloodgroup == 'A+') {
                                                            echo 'selected';
                                                        } ?> value="A+">A+</option>
                                                        <option <?php if (Auth::user()->bloodgroup == 'B+') {
                                                            echo 'selected';
                                                        } ?> value="B+">B+</option>
                                                        <option <?php if (Auth::user()->bloodgroup == 'AB+') {
                                                            echo 'selected';
                                                        } ?> value="AB+">AB+</option>
                                                        <option <?php if (Auth::user()->bloodgroup == 'O+') {
                                                            echo 'selected';
                                                        } ?> value="O+">O+</option>
                                                        <option <?php if (Auth::user()->bloodgroup == 'A-') {
                                                            echo 'selected';
                                                        } ?> value="A-">A-</option>
                                                        <option <?php if (Auth::user()->bloodgroup == 'B-') {
                                                            echo 'selected';
                                                        } ?> value="B-">B-</option>
                                                        <option <?php if (Auth::user()->bloodgroup == 'AB-') {
                                                            echo 'selected';
                                                        } ?> value="AB-">AB-</option>
                                                        <option <?php if (Auth::user()->bloodgroup == 'O-') {
                                                            echo 'selected';
                                                        } ?> value="O-">O-</option>
                                                        <option <?php if (Auth::user()->bloodgroup == '0') {
                                                            echo 'selected';
                                                        } ?> value="0">Unknown</option>
                                                        @if ($errors->has('bloodgroup'))
                                                            <p class="m-1 text-danger">{{ $errors->first('bloodgroup') }}
                                                            </p>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('SSC Year') }}</label>
                                                    <select name="sscyear" style="border: 1px dotted rgb(239, 14, 14)"
                                                        id="" class="form-control ">
                                                        <option value="" selected disabled>Select SSC Year</option>
                                                        @php
                                                            
                                                            for ($i = 0; $i <= 70; $i++) {
                                                                $year = date('Y', strtotime("last day of +$i year")) - 70;
                                                                if (Auth::user()->sscyear == $year) {
                                                                    echo '<option   value=' . $year . ' selected>' . $year . '</option>';
                                                                } else {
                                                                    echo '<option   value=' . $year . '>' . $year . '</option>';
                                                                }
                                                            
                                                                // echo "<option name='$year'>$year</option>";
                                                            }
                                                        @endphp
                                                    </select>

                                                    @if ($errors->has('sscyear'))
                                                        <p class="m-1 text-danger">{{ $errors->first('sscyear') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Village') }}</label>
                                                    <input type="text" class="form-control" name="village"
                                                        value="{{ Auth::user()->village }}">
                                                    @if ($errors->has('village'))
                                                        <p class="m-1 text-danger">{{ $errors->first('village') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">{{ __('Facebook') }}</label>
                                                    <input type="text" class="form-control" name="facebook"
                                                        value="{{ Auth::user()->facebook }}">
                                                    @if ($errors->has('facebook'))
                                                        <p class="m-1 text-danger">{{ $errors->first('facebook') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6 pt-4">
                                                <button type="submit" class="main-btn">{{ __('Submit') }} <i
                                                        class="far fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- User Dashboard End -->

@endsection
