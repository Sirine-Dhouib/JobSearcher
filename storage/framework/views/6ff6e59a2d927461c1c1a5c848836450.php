<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">Profile</h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Jobs</a> </span> <span><span class="sep m-0"> ></span> <?php echo e(Auth::user()->company->cname); ?></span></p>
  </div>
</div>

<div class="site-section bg-light">

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="card bg-white">
                <div class="card-header">
                    Update company profile
                </div>
                <div class="card-body">
                        <form action="<?php echo e(route('company.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                        
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" value="<?php echo e(Auth::user()->company->address); ?>">
                        
                                <?php if($errors->has('address')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('address')); ?></p>
                                </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="">Phone</label>
                                <input type="text" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(Auth::user()->company->phone); ?>">
                        
                                <?php if($errors->has('phone')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('phone')); ?></p>
                                </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="">Website</label>
                                <input type="text" class="form-control<?php echo e($errors->has('website') ? ' is-invalid' : ''); ?>" name="website" value="<?php echo e(Auth::user()->company->website); ?>">
                        
                                <?php if($errors->has('website')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('website')); ?></p>
                                </div>
                                <?php endif; ?>

                            </div>
                
                            <div class="form-group mt-3">
                                <label for="">Slogan</label>
                                <input type="text" class="form-control<?php echo e($errors->has('slogan') ? ' is-invalid' : ''); ?>" name="slogan" value="<?php echo e(Auth::user()->company->slogan); ?>">
                        
                                <?php if($errors->has('slogan')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('slogan')); ?></p>
                                </div>
                                <?php endif; ?>

                            </div>
                
                        
                            <div class="form-group mt-3">
                                <label for="">Description</label>
                                <textarea name="description" id="" style="height: 120px" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" cols="30" rows="10"><?php echo e(Auth::user()->company->description); ?></textarea>
                                
                                <?php if($errors->has('description')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('description')); ?></p>
                                </div>
                                <?php endif; ?>

                            </div>

                            <div class="form-group mt-3">
                                <button class="btn btn-success">Update</button>
                            </div>

                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                    <strong>Wow awesome !</strong> <?php echo e(Session::get('message')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            
                            <?php endif; ?>
                            

                        

                        </form>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <form action="<?php echo e(route('logo')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <div class="card-header  mb-3">
                            Company Logo
                        </div>
                        <?php if(!empty(Auth::user()->company->logo)): ?>
                        <img src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e(Auth::user()->company->logo); ?>" style="width:100px; height:100px;border-radius:100px;object-fit: cover; margin:0px auto" class="border  mb-3" alt="">
                        <?php else: ?>    
                        <img src="<?php echo e(asset('cover/logo-photo.jpg')); ?>" style="width:100px;border-radius:100px; margin:0px auto" class="border  mb-3" alt="">

                        <?php endif; ?>
                        <div class="card-body p-0 text-center">
                
                            <input type="file" class="form-control<?php echo e($errors->has('logo') ? ' is-invalid' : ''); ?>" name="logo">
                            <button class="btn btn-success w-100 mt-3">Update</button>

                            <?php if($errors->has('logo')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('logo')); ?></p>
                                </div>
                            <?php endif; ?>


                            <?php if(Session::has('logo')): ?>
                                <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                    <?php echo e(Session::get('logo')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                
                            <?php endif; ?>

                        </div>
                    </div>

                </form>
                <div class="card mt-3">
                    <div class="card-header">
                        Company info
                    </div>
                    <div class="card-body">
                        <p><strong class="badge bg-secondary badge-primary">Slogan:  </strong> <?php echo e(Auth::user()->company->slogan); ?></p>
                        <p>Company Name: <strong class="badge bg-secondary badge-primary">  <?php echo e(Auth::user()->company->cname); ?></strong></p>
                        <p>Company Address: <strong class="badge bg-secondary badge-primary">  <?php echo e(Auth::user()->company->address); ?></strong></p>
                        <p>Company Email: <strong class="badge bg-secondary badge-primary">  <?php echo e(Auth::user()->email); ?></strong></p>
                        <p>Company Phone: <strong class="badge bg-secondary badge-primary">  <?php echo e(Auth::user()->company->phone); ?></strong></p>
                        <p>Company website: <strong class="badge bg-secondary badge-primary "><a target="_blank" class="text-white" href="<?php echo e(Auth::user()->company->website); ?>"> <?php echo e(Auth::user()->company->website); ?></a> </strong></p>
                        <p>Company Jobs: <strong class="badge bg-secondary badge-primary "><a target="_blank" class="text-white" href="company/<?php echo e(Auth::user()->company->slug); ?>"> View jobs</a> </strong></p>
                        <p><strong class="badge bg-secondary badge-primary ">Company Description: </strong> <?php echo e(Auth::user()->company->description); ?></p>

                    </div>
                </div>
            
                <form action="<?php echo e(route('banner')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card mt-3">
                        <div class="card-header">
                            Upload Banner
                        </div>
                        <div class="card-body">
                            <div>
                                <?php if(!empty(Auth::user()->company->banner)): ?>
                                <img src="<?php echo e(asset('uploads/banner')); ?>/<?php echo e(Auth::user()->company->banner); ?>" style="width:100%;object-fit: cover; margin:0px auto" class="border  mb-3" alt="">
                                <?php else: ?>
                                <img src="<?php echo e(asset('cover/cover-photo.jpg')); ?>" style="max-width: 100%" alt="">
                                <?php endif; ?> 
                            </div>
                            <input type="file" class="form-control<?php echo e($errors->has('banner') ? ' is-invalid' : ''); ?>" name="banner">
                            <button class="btn btn-success mt-3">Update</button>

                        <?php if(Session::has('banner')): ?>
                            <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                <strong>Wow !</strong> <?php echo e(Session::get('banner')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <?php if($errors->has('banner')): ?>
                            <div style="color:red">
                                <p class="mb-0"><?php echo e($errors->first('banner')); ?></p>
                            </div>
                        <?php endif; ?>
                

                        </div>
                    </div>
                </form>
            


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\JobFinder-Job-Portal-Laravel-Vue-Script\resources\views/frontend/company/create.blade.php ENDPATH**/ ?>