@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('User Details') }} </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('User Details') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('User Details') }}</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.front_user.index') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                </a>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-bordered">

                                <tbody>
                                    <tr>
                                        <th>Image :</th>
                                        <td><img class="w-80" src="{{ asset('profilepic/' . $user->profilepic) }}"
                                                alt=""></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Member ID</th>
                                        <td>{{ str_pad($user->id, 4, '0', STR_PAD_LEFT) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Name</th>
                                        <td>
                                            <h6><a href=""> {{ '@' . $user->username }}</a></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>

                                    <tr>
                                        <th>Gender</th>
                                        <td>{{ $user->gender }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td>{{ $user->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alternate Number</th>
                                        <td>{{ $user->alterphone }}</td>
                                    </tr>
                                    <tr>
                                        <th>SSC Year</th>
                                        <td>{{ $user->sscyear }}</td>
                                    </tr>
                                    <tr>
                                        <th>Father's Name</th>
                                        <td>{{ $user->fathersname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mather's Name</th>
                                        <td>{{ $user->mathersname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Village</th>
                                        <td>{{ $user->village }}</td>
                                    </tr>
                                    <tr>
                                        <th>Blood Group</th>
                                        <td>{{ $user->bloodgroup }}</td>
                                    </tr>
                                    <tr>
                                        <th>Occupation</th>
                                        <td>{{ $user->occupation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email Varify :</th>
                                        <td>
                                            @if ($user->email_verified == '0')
                                                <span class="badge badge-warning">No</span>
                                            @elseif ($user->email_verified == 'Yes')
                                                <span class="badge badge-success">Yes</span>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
