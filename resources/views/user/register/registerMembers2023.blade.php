@extends('admin.layout')

@section('content')
    <style>
        .tableCss {
            font-size: 12px;

        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Register 2023') }} </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Register 2023') }}</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-md-12 mt-1">
                    @if (\Session::has('message'))
                        <div class="alert alert-success">
                            <h6>{!! \Session::get('message') !!}</h6>
                        </div>
                    @endif
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('User List 2023') }}</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-bordered data_table tableCss">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Occupation</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Father Name</th>
                                        <th scope="col">Mother Name</th>
                                        <th scope="col">Village</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">SSC year</th>
                                        <th scope="col">From Bkash</th>
                                        <th scope="col">To Bkash</th>
                                        <th scope="col">Transection ID</th>
                                        <th scope="col">Total Members</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalAmount = 0;
                                        $i = 1;
                                    @endphp
                                    @foreach ($allregisters as $key => $user)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->occupation }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->fathersname }}</td>
                                            <td>{{ $user->mathersname }}</td>
                                            <td>{{ $user->village }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->sscyear }}</td>
                                            <td>{{ $user->frombkash }}</td>
                                            <td>{{ $user->tobkash }}</td>
                                            <td>{{ $user->transectionId }}</td>
                                            <td>{{ $user->total_members }}</td>
                                            <td>{{ $user->amount }}</td>

                                            @php
                                                $totalAmount += $user->amount;
                                            @endphp
                                            <td>
                                                @if ($user->status == 'Confirm')
                                                    <span class="badge badge-success">Confirm</span>
                                                @elseif ($user->status == 'Pending')
                                                    <span class="badge badge-warning">Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($user->status == 'Confirm')
                                                    <a class="btn btn-warning btn-xs" disabled href="#">
                                                        Approved
                                                    </a>
                                                @elseif ($user->status == 'Pending')
                                                    <a class="btn btn-primary btn-xs"
                                                        href="{{ route('admin.approved', $user->id) }}">
                                                        Approve
                                                    </a>
                                                @endif


                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="14" style="text-align: center">Total</td>
                                        <th>
                                            @php
                                                echo 'TK. ' . $totalAmount;
                                            @endphp
                                        </th>
                                        <th colspan="2">
                                        </th>
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
