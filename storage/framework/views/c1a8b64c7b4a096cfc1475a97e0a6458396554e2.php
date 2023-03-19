

<?php $__env->startSection('content'); ?>
    <style>
        .tableCss {
            font-size: 12px;

        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Register 2023')); ?> </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                    class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                        <li class="breadcrumb-item"><?php echo e(__('Register 2023')); ?></li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-md-12 mt-1">
                    <?php if(\Session::has('message')): ?>
                        <div class="alert alert-success">
                            <h6><?php echo \Session::get('message'); ?></h6>
                        </div>
                    <?php endif; ?>
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
                            <h3 class="card-title mt-1"><?php echo e(__('User List 2023')); ?></h3>

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
                                    <?php
                                        $totalAmount = 0;
                                        $i = 1;
                                    ?>
                                    <?php $__currentLoopData = $allregisters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($i); ?></td>
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->phone); ?></td>
                                            <td><?php echo e($user->occupation); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->fathersname); ?></td>
                                            <td><?php echo e($user->mathersname); ?></td>
                                            <td><?php echo e($user->village); ?></td>
                                            <td><?php echo e($user->gender); ?></td>
                                            <td><?php echo e($user->sscyear); ?></td>
                                            <td><?php echo e($user->frombkash); ?></td>
                                            <td><?php echo e($user->tobkash); ?></td>
                                            <td><?php echo e($user->transectionId); ?></td>
                                            <td><?php echo e($user->total_members); ?></td>
                                            <td><?php echo e($user->amount); ?></td>

                                            <?php
                                                $totalAmount += $user->amount;
                                            ?>
                                            <td>
                                                <?php if($user->status == 'Confirm'): ?>
                                                    <span class="badge badge-success">Confirm</span>
                                                <?php elseif($user->status == 'Pending'): ?>
                                                    <span class="badge badge-warning">Pending</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($user->status == 'Confirm'): ?>
                                                    <a class="btn btn-warning btn-xs" disabled href="#">
                                                        Approved
                                                    </a>
                                                <?php elseif($user->status == 'Pending'): ?>
                                                    <a class="btn btn-primary btn-xs"
                                                        href="<?php echo e(route('admin.approved', $user->id)); ?>">
                                                        Approve
                                                    </a>
                                                <?php endif; ?>


                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th colspan="14" style="text-align: center">Total</td>
                                        <th>
                                            <?php
                                                echo 'TK.' . $totalAmount;
                                            ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eshbhs\resources\views/user/register/registerMembers2023.blade.php ENDPATH**/ ?>