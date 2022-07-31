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
                          <form action="<?php echo e(route('user.updateprofile', Auth::user()->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group mb-4 text-center">
                                        <div class="upload-img d-inline">
                                          <div class="img">
                                              <img class="mb-3 show-img img-demo" src="
                                              <?php if(Auth::user()->image): ?>
                                              <?php echo e(asset('assets/front/img/'.Auth::user()->image)); ?>

                                              <?php else: ?>
                                              <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>

                                              <?php endif; ?>"
                                               alt="">
                                          </div>
                                          <div class="file-upload-area">
                                            <div class="upload-file">
                                              <input type="file" name="image" class="upload image form-control up-img">
                                            </div>
                                            <?php if($errors->has('image')): ?>
                                <p  class="m-1 text-danger"><?php echo e($errors->first('image')); ?></p>
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
                                  <input type="text" class="form-control"  name="name" value="<?php echo e(Auth::user()->name); ?>">
                                  <?php if($errors->has('name')): ?>
                                <p  class="m-1 text-danger"><?php echo e($errors->first('name')); ?></p>
                                <?php endif; ?>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('Email')); ?></label>
                                  <input type="email" class="form-control"  name="email" 
                                    value="<?php echo e(Auth::user()->email); ?>">
                                    <?php if($errors->has('email')): ?>
                                <p  class="m-1 text-danger"><?php echo e($errors->first('email')); ?></p>
                                <?php endif; ?>
                                </div>
                              </div>
        
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('Phone')); ?></label>
                                  <input type="text" class="form-control" name="phone" value="<?php echo e(Auth::user()->phone); ?>">
                                  <?php if($errors->has('phone')): ?>
                                <p  class="m-1 text-danger"><?php echo e($errors->first('phone')); ?></p>
                                <?php endif; ?>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('Address')); ?></label>
                                  <input type="text" class="form-control"  name="address" value="<?php echo e(Auth::user()->address); ?>">
                                  <?php if($errors->has('address')): ?>
                                <p  class="m-1 text-danger"><?php echo e($errors->first('address')); ?></p>
                                <?php endif; ?>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('Country')); ?></label>
                                  <input type="text" class="form-control" name="country" value="<?php echo e(Auth::user()->country); ?>">
                                  <?php if($errors->has('country')): ?>
                                <p  class="m-1 text-danger"><?php echo e($errors->first('country')); ?></p>
                                <?php endif; ?>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('State')); ?></label>
                                  <input type="text" class="form-control"  name="state" value="<?php echo e(Auth::user()->state); ?>">
                                  <?php if($errors->has('state')): ?>
                                <p  class="m-1 text-danger"><?php echo e($errors->first('state')); ?></p>
                                <?php endif; ?>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label for=""><?php echo e(__('Zip Code')); ?></label>
                                  <input type="text" class="form-control"  name="zipcode"
                                    value="<?php echo e(Auth::user()->zipcode); ?>">
                                    <?php if($errors->has('zipcode')): ?>
                                <p  class="m-1 text-danger"><?php echo e($errors->first('zipcode')); ?></p>
                                <?php endif; ?>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\officeserver\htdocs\eshbhs\core\resources\views/user/editprofile.blade.php ENDPATH**/ ?>