<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>
<?php $__env->startSection('content'); ?>

	<!--Main Breadcrumb Area Start -->
  <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-item text-center">
            <h2 class="title"><?php echo e(__('Change Password')); ?></h2>
              <ul class="breadcrumb-nav">
                <li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
                <li class="active" aria-current="page"><?php echo e(__('Change Password')); ?></li>
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
                        <h5 class="card-header"><?php echo e(__('Change Password')); ?></h5>
                        <div class="card-body">
                          <form action="<?php echo e(route('user.update_password', Auth::user()->id)); ?>" method="POST" >
                            <?php echo csrf_field(); ?>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('Old Password')); ?></label>
                                  <input type="text" class="form-control"  name="old_password" value="">
                                  <?php if($errors->has('old_password')): ?>
                                  <p  class="m-1 text-danger"><?php echo e($errors->first('old_password')); ?></p>
                                  <?php endif; ?>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('New Password')); ?></label>
                                  <input type="text" class="form-control"  name="password" value="">
                                  <?php if($errors->has('password')): ?>
                                  <p  class="m-1 text-danger"><?php echo e($errors->first('password')); ?></p>
                                  <?php endif; ?>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('Confirm Password')); ?></label>
                                  <input type="text" class="form-control"  name="password_confirmation" value="">
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <button type="submit" class="main-btn"><?php echo e(__('Submit')); ?> <i class="far fa-paper-plane"></i></button>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\officeserver\htdocs\eshbhs\resources\views/user/change-password.blade.php ENDPATH**/ ?>