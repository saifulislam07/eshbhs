@extends('front.layout')

@section('meta-keywords', "$seo->meta_keywords")
@section('meta-description', "$seo->meta_description")

@section('style')
    <!-- DataTable css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/data-table/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/data-table/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/data-table/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <style>
        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }
    </style>
    <!--Main Breadcrumb Area Start -->
    <div class="page-title-area no-print"
        style="background-image: url('{{ asset('assets/front/img/' . $setting->breadcrumb_image) }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <h2 class="title">{{ __('Dashboard') }}</h2>
                        <ul class="breadcrumb-nav">
                            <li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
                            <li class="active" aria-current="page">{{ __('Dashboard') }}</li>
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
                <div class="col-lg-3 no-print">
                    @includeif('user.dashboard-sidenav')
                </div>
                <div class="col-lg-9 ">

                    <a onclick="print();" style="color :white"
                        class="btn btn-info btn-sm float-right mt-2 mb-2 mr-4 no-print">Print</a>
                    <div class="dashboard-inner">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td colspan="2" class="user-info">
                                        <img class="mb-3 show-img img-demo"
                                            src="
    @if (Auth::user()->profilepic) {{ asset('profile/' . Auth::user()->profilepic) }}
    @else
    {{ asset('assets/admin/img/img-demo.jpg') }} @endif"
                                            alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Member ID</th>
                                    <td>{{ str_pad(Auth::user()->id, 4, '0', STR_PAD_LEFT) }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th>User Name</th>
                                    <td>
                                        <h6><a href=""> {{ '@' . Auth::user()->username }}</a></h6>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>

                                <tr>
                                    <th>Gender</th>
                                    <td>{{ Auth::user()->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>{{ Auth::user()->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Alternate Number</th>
                                    <td>{{ Auth::user()->alterphone }}</td>
                                </tr>
                                <tr>
                                    <th>SSC Year</th>
                                    <td>{{ Auth::user()->sscyear }}</td>
                                </tr>
                                <tr>
                                    <th>Father's Name</th>
                                    <td>{{ Auth::user()->fathersname }}</td>
                                </tr>
                                <tr>
                                    <th>Mather's Name</th>
                                    <td>{{ Auth::user()->mathersname }}</td>
                                </tr>
                                <tr>
                                    <th>Village</th>
                                    <td>{{ Auth::user()->village }}</td>
                                </tr>
                                <tr>
                                    <th>Blood Group</th>
                                    <td>{{ Auth::user()->bloodgroup }}</td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td>{{ Auth::user()->occupation }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- User Dashboard End -->


    <div class="modal fade no-print" id="view_order_details_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __('View Order Details') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" id="order_info_view">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm"
                        data-dismiss="modal">{{ __('Close') }}</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- DataTable js -->
    <script src="{{ asset('assets/admin/plugins/data-table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/data-table/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/data-table/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/data-table/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/data-table/buttons.bootstrap4.min.js') }}"></script>

    <script>
        $(".data_table").DataTable();
    </script>

@endsection
