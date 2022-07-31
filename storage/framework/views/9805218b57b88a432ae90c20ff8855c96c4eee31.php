<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>
<?php $__env->startSection('content'); ?>

    <!--Main Breadcrumb Area Start -->
    <div class="page-title-area"
        style="background-image: url('<?php echo e(asset('assets/front/img/' . $setting->breadcrumb_image)); ?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <h2 class="title"><?php echo e(__('Register')); ?></h2>
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
                                <?php echo e(__('Register')); ?>

                            </h4>
                            <p class="subtitle">
                                <?php echo e(__('Register your account to continue.')); ?>

                            </p>
                        </div>
                        <form class="" action="<?php echo e(route('user.register.submit')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="<?php echo e(old('name')); ?>" name="name"
                                        placeholder="<?php echo e(__('Enter Full Name')); ?>">
                                    <?php if($errors->has('name')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('name')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="<?php echo e(old('username')); ?>"
                                        name="username" placeholder="<?php echo e(__('Enter Username')); ?>">
                                    <?php if($errors->has('username')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('username')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>



                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="<?php echo e(old('phone')); ?>" name="username"
                                        placeholder="<?php echo e(__('Enter Mobile Number')); ?>">
                                    <?php if($errors->has('phone')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('phone')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="text" value="<?php echo e(old('alterphone')); ?>"
                                        name="username" placeholder="<?php echo e(__('Enter Alternative Mobile number')); ?>">
                                    <?php if($errors->has('alterphone')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('alterphone')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="file" name="profilepic"
                                        value="<?php echo e(old('profilepic')); ?>">
                                    <?php if($errors->has('profilepic')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('profilepic')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input autocomplete="off" class="form-control" type="url" name="facebook"
                                        value="<?php echo e(old('facebook')); ?>"
                                        placeholder="<?php echo e(__('Enter Facebook  Profile Link')); ?>">
                                    <?php if($errors->has('facebook')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('facebook')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <select name="bloodgroup" id="" class="form-control ">
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
                                        <?php if($errors->has('bloodgroup')): ?>
                                            <p class="m-1 text-danger"><?php echo e($errors->first('bloodgroup')); ?></p>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <select name="sscyear" id="" class="form-control ">
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
                                <div class="col-md-6 mt-2">

                                    <input autocomplete="off" class="form-control" type="email" name="email"
                                        value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('Enter Email')); ?>">
                                    <?php if($errors->has('email')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('email')); ?></p>
                                    <?php endif; ?>

                                </div>
                                <div class="col-md-6 mt-2"></div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="password" name="password"
                                        placeholder="<?php echo e(__('Enter Password')); ?>">
                                    <?php if($errors->has('password')): ?>
                                        <p class="m-1 text-danger"><?php echo e($errors->first('password')); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <input class="form-control" type="password" name="password_confirmation"
                                        placeholder="<?php echo e(__('Confirm Password')); ?>">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-6 mt-2">
                                    <?php if($visibility->is_recaptcha == 1): ?>
                                        <div class="d-block my-4">
                                            <?php echo NoCaptcha::renderJs(); ?>

                                            <?php echo NoCaptcha::display(); ?>

                                            <?php if($errors->has('g-recaptcha-response')): ?>
                                                <?php
                                                    $errmsg = $errors->first('g-recaptcha-response');
                                                ?>
                                                <p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <button class="main-btn" type="submit"><?php echo e(__('Create Account')); ?></button>
                            <p class="reg-text text-center mb-0"><?php echo e(__('Already have an acocunt?')); ?> <a
                                    href="<?php echo e(route('user.login')); ?>"><?php echo e(__('Login')); ?></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\officeserver\htdocs\eshbhs\resources\views/user/register.blade.php ENDPATH**/ ?>