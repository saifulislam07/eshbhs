

<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>
<?php $__env->startSection('content'); ?>

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
        style="background-image: url('<?php echo e(asset('assets/front/img/' . $setting->breadcrumb_image)); ?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <h2 class="title"><?php echo e(__('Registration for 2023')); ?></h2>
                        <ul class="breadcrumb-nav">
                            <li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
                            <li class="active" aria-current="page"><?php echo e(__('Register')); ?></li>
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
                                <?php echo e(__('Registration for 2023')); ?>

                            </h4>
                            <p class="subtitle">
                                <?php echo e(__('Register your account to continue.')); ?>

                            </p>
                        </div>

                        <div class="heading">
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session()->get('success')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="heading">
                            <?php if(session()->has('amountError')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(session()->get('amountError')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="heading">
                            <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                        <form class="" action="<?php echo e(route('user.register.register2023')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input type="hidden" value="2023" name="yearofregistration">
                                    <input required style="border: 1px dotted rgb(239, 14, 14)" class="form-control"
                                        type="text" value="<?php echo e(old('name')); ?>" name="name"
                                        placeholder="<?php echo e(__('Enter name as per your certificate')); ?>">
                                    <?php if($errors->has('name')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('name')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">

                                    <input required autocomplete="off" style="border: 1px dotted rgb(239, 14, 14)"
                                        class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>"
                                        placeholder="<?php echo e(__('Enter Email')); ?>">
                                    <?php if($errors->has('email')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('email')); ?></p>
                                    <?php endif; ?>

                                </div>
                            </div>



                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input required class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="<?php echo e(old('fathersname')); ?>" name="fathersname"
                                        placeholder="<?php echo e(__('Enter Fathers Name')); ?>">
                                    <?php if($errors->has('fathersname')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('fathersname')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="<?php echo e(old('mathersname')); ?>"
                                        name="mathersname" placeholder="<?php echo e(__('Enter Mothers Name')); ?>">
                                    <?php if($errors->has('mathersname')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('mathersname')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input required class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" name="village" placeholder="<?php echo e(__('Enter Village')); ?>">
                                    <?php if($errors->has('village')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('village')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input required class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" name="occupation" placeholder="<?php echo e(__('Enter Occupation')); ?>">
                                    <?php if($errors->has('occupation')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('occupation')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input required class="form-control" style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="<?php echo e(old('phone')); ?>" name="phone"
                                        placeholder="<?php echo e(__('Enter Mobile Number')); ?>">
                                    <?php if($errors->has('phone')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('phone')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="<?php echo e(old('alterphone')); ?>"
                                        name="alterphone" placeholder="<?php echo e(__('Enter Alternative Mobile number')); ?>">
                                    <?php if($errors->has('alterphone')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('alterphone')); ?></p>
                                    <?php endif; ?>
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
                                    <?php if($errors->has('gender')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('gender')); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <select required name="sscyear" style="border: 1px dotted rgb(239, 14, 14)"
                                        id="" class="form-control ">
                                        <option value="" selected disabled>Select SSC Year</option>
                                        <?php
                                            
                                            for ($i = 0; $i <= 70; $i++) {
                                                $year = date('Y', strtotime("last day of +$i year")) - 70;
                                                echo "<option name='$year'>$year</option>";
                                            }
                                        ?>
                                    </select>

                                    <?php if($errors->has('sscyear')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('sscyear')); ?></p>
                                    <?php endif; ?>
                                </div>


                            </div>



                            <div class="input-group">
                                <div class="col-md-12 bg-info mb-2 text-white">
                                    Payment Informations
                                </div>
                                <div class="col-md-6 mt-2">

                                    <input class="form-control" required style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="<?php echo e(old('frombkash')); ?>" name="frombkash"
                                        placeholder="<?php echo e(__('From Bkash Number')); ?>">
                                    <?php if($errors->has('frombkash')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('frombkash')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" required style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="<?php echo e(old('tobkash')); ?>" name="tobkash"
                                        placeholder="<?php echo e(__('To Bkash Number')); ?>">
                                    <?php if($errors->has('tobkash')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('tobkash')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" required style="border: 1px dotted rgb(239, 14, 14)"
                                        type="text" value="<?php echo e(old('transectionId')); ?>" name="transectionId"
                                        placeholder="<?php echo e(__('Transection ID')); ?>">
                                    <?php if($errors->has('transectionId')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('transectionId')); ?></p>
                                    <?php endif; ?>
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
                                        type="text" value="<?php echo e(old('amount')); ?>" name="amount"
                                        placeholder="<?php echo e(__('Amount')); ?>"
                                        <?php if($errors->has('amount')): ?> <p class="m-1 text-danger"><?php echo e($errors->first('amount')); ?></p> <?php endif; ?>
                                        </div>
                                </div>






                                <button class="main-btn checkbutton" type="submit"><?php echo e(__('Registration')); ?></button>
                                <p class="reg-text text-center mb-0">
                                    <?php echo e(__('রেজিস্ট্রেশনের নিয়ম না বুঝলে ম্যাসেজ পাঠান, ২৪ ঘণ্টার মধ্যে আপনার সাথে যোগাযোগ করা হবে ।')); ?>

                                    <a class="btn btn-sm btn-success " target="_blank"
                                        href="https://www.facebook.com/ExStudentHBHS"><?php echo e(__('SEND MESSAGE')); ?></a>
                                </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    

    <!-- Register Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eshbhs\resources\views/user/twentytwentythree.blade.php ENDPATH**/ ?>