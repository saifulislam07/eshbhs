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
                        <h2 class="title"><?php echo e(__('Edit Profile')); ?></h2>
                        <ul class="breadcrumb-nav">
                            <li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
                            <li class="active" aria-current="page"><?php echo e(__('Edit Profile')); ?></li>
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
                    <?php if ($__env->exists('user.dashboard-sidenav')) echo $__env->make('user.dashboard-sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header"><?php echo e(__('Edit Profile')); ?></h5>
                                <div class="card-body">
                                    <form action="<?php echo e(route('user.updateprofile', Auth::user()->id)); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <div class="form-group mb-4 text-center">
                                                    <div class="upload-img d-inline">
                                                        <div class="img">
                                                            <img class="mb-3 show-img img-demo"
                                                                src="
                                              <?php if(Auth::user()->profilepic): ?> <?php echo e(asset('profilepic/' . Auth::user()->profilepic)); ?>

                                              <?php else: ?>
                                              <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?> <?php endif; ?>"
                                                                alt="">
                                                        </div>
                                                        <div class="file-upload-area">
                                                            <div class="upload-file">
                                                                <input type="file" name="profilepic"
                                                                    class="upload image form-control up-img">
                                                            </div>
                                                            <?php if($errors->has('profilepic')): ?>
                                                                <p class="m-1 text-danger">
                                                                    <?php echo e($errors->first('profilepic')); ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('First Name')); ?></label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="<?php echo e(Auth::user()->name); ?>">
                                                    <?php if($errors->has('name')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('name')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('User Name')); ?></label>
                                                    <input type="text" class="form-control" name="username"
                                                        value="<?php echo e(Auth::user()->username); ?>">
                                                    <?php if($errors->has('username')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('username')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Email')); ?></label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="<?php echo e(Auth::user()->email); ?>">
                                                    <?php if($errors->has('email')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('email')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Phone')); ?></label>
                                                    <input type="text" class="form-control" name="phone"
                                                        value="<?php echo e(Auth::user()->phone); ?>">
                                                    <?php if($errors->has('phone')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('phone')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Alternative Phone')); ?></label>
                                                    <input type="text" class="form-control" name="alterphone"
                                                        value="<?php echo e(Auth::user()->alterphone); ?>">
                                                    <?php if($errors->has('alterphone')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('alterphone')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Occupation')); ?></label>
                                                    <input type="text" class="form-control" name="occupation"
                                                        value="<?php echo e(Auth::user()->occupation); ?>">
                                                    <?php if($errors->has('occupation')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('occupation')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Father Name')); ?></label>
                                                    <input type="text" class="form-control" name="fathersname"
                                                        value="<?php echo e(Auth::user()->fathersname); ?>">
                                                    <?php if($errors->has('fathersname')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('fathersname')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Mother name')); ?></label>
                                                    <input type="text" class="form-control" name="mathersname"
                                                        value="<?php echo e(Auth::user()->mathersname); ?>">
                                                    <?php if($errors->has('mathersname')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('mathersname')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Gendar')); ?></label>
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


                                                    <?php if($errors->has('gender')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('gender')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Blood Group')); ?></label>
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
                                                        <?php if($errors->has('bloodgroup')): ?>
                                                            <p class="m-1 text-danger"><?php echo e($errors->first('bloodgroup')); ?>

                                                            </p>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('SSC Year')); ?></label>
                                                    <select name="sscyear" style="border: 1px dotted rgb(239, 14, 14)"
                                                        id="" class="form-control ">
                                                        <option value="" selected disabled>Select SSC Year</option>
                                                        <?php
                                                            
                                                            for ($i = 0; $i <= 70; $i++) {
                                                                $year = date('Y', strtotime("last day of +$i year")) - 70;
                                                                if (Auth::user()->sscyear == $year) {
                                                                    echo '<option   value=' . $year . ' selected>' . $year . '</option>';
                                                                } else {
                                                                    echo '<option   value=' . $year . '>' . $year . '</option>';
                                                                }
                                                            
                                                                // echo "<option name='$year'>$year</option>";
                                                            }
                                                        ?>
                                                    </select>

                                                    <?php if($errors->has('sscyear')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('sscyear')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Village')); ?></label>
                                                    <input type="text" class="form-control" name="village"
                                                        value="<?php echo e(Auth::user()->village); ?>">
                                                    <?php if($errors->has('village')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('village')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for=""><?php echo e(__('Facebook')); ?></label>
                                                    <input type="text" class="form-control" name="facebook"
                                                        value="<?php echo e(Auth::user()->facebook); ?>">
                                                    <?php if($errors->has('facebook')): ?>
                                                        <p class="m-1 text-danger"><?php echo e($errors->first('facebook')); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 pt-4">
                                                <button type="submit" class="main-btn"><?php echo e(__('Submit')); ?> <i
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\officeserver\htdocs\eshbhs\resources\views/user/editprofile.blade.php ENDPATH**/ ?>