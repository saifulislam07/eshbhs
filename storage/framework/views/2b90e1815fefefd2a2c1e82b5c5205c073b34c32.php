<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>

<?php $__env->startSection('style'); ?>
    <!-- DataTable css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/data-table/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/data-table/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/data-table/buttons.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>
        @media  print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }
    </style>
    <!--Main Breadcrumb Area Start -->
    <div class="page-title-area no-print"
        style="background-image: url('<?php echo e(asset('assets/front/img/' . $setting->breadcrumb_image)); ?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <h2 class="title"><?php echo e(__('Dashboard')); ?></h2>
                        <ul class="breadcrumb-nav">
                            <li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
                            <li class="active" aria-current="page"><?php echo e(__('Dashboard')); ?></li>
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
                    <?php if ($__env->exists('user.dashboard-sidenav')) echo $__env->make('user.dashboard-sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php if(Auth::user()->profilepic): ?> <?php echo e(asset('profile/' . Auth::user()->profilepic)); ?>

    <?php else: ?>
    <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?> <?php endif; ?>"
                                            alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">Member ID</th>
                                    <td><?php echo e(str_pad(Auth::user()->id, 4, '0', STR_PAD_LEFT)); ?></td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo e(Auth::user()->name); ?></td>
                                </tr>
                                <tr>
                                    <th>User Name</th>
                                    <td>
                                        <h6><a href=""> <?php echo e('@' . Auth::user()->username); ?></a></h6>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo e(Auth::user()->email); ?></td>
                                </tr>

                                <tr>
                                    <th>Gender</th>
                                    <td><?php echo e(Auth::user()->gender); ?></td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td><?php echo e(Auth::user()->phone); ?></td>
                                </tr>
                                <tr>
                                    <th>Alternate Number</th>
                                    <td><?php echo e(Auth::user()->alterphone); ?></td>
                                </tr>
                                <tr>
                                    <th>SSC Year</th>
                                    <td><?php echo e(Auth::user()->sscyear); ?></td>
                                </tr>
                                <tr>
                                    <th>Father's Name</th>
                                    <td><?php echo e(Auth::user()->fathersname); ?></td>
                                </tr>
                                <tr>
                                    <th>Mather's Name</th>
                                    <td><?php echo e(Auth::user()->mathersname); ?></td>
                                </tr>
                                <tr>
                                    <th>Village</th>
                                    <td><?php echo e(Auth::user()->village); ?></td>
                                </tr>
                                <tr>
                                    <th>Blood Group</th>
                                    <td><?php echo e(Auth::user()->bloodgroup); ?></td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td><?php echo e(Auth::user()->occupation); ?></td>
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
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('View Order Details')); ?></h5>
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
                        data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- DataTable js -->
    <script src="<?php echo e(asset('assets/admin/plugins/data-table/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/data-table/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/data-table/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/data-table/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/data-table/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/data-table/buttons.bootstrap4.min.js')); ?>"></script>

    <script>
        $(".data_table").DataTable();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\officeserver\htdocs\eshbhs\resources\views/user/dashboard.blade.php ENDPATH**/ ?>