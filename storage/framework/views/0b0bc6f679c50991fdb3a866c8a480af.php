


<div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div> <!-- .site-mobile-menu -->
  

<div class="site-navbar-wrap js-site-navbar bg-white">
      
    <div class="container">
      <div class="site-navbar bg-light">
        <div class="py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="/">Job<strong class="font-weight-bold">Searcher</strong> </a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container pr-0">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
         
                    <li class="<?php echo e(request()->routeIs('company') ? 'active' : ''); ?>"><a href="<?php echo e(route('company')); ?>">Company</a></li>
                    <?php if(!Auth::check()): ?>
                    <li class="<?php echo e(request()->routeIs('/register') ? 'active' : ''); ?>"><a href="/register"> Register As Job Seeker</a></li>
                    <li class="<?php echo e(request()->routeIs('employer.register') ? 'active' : ''); ?>"><a href="<?php echo e(route('employer.register')); ?>">Register As Employer</a></li>
                    <?php else: ?>

                 
                        <?php if(Auth::user()->user_type==='employer' || Auth::user()->user_type==='seeker'): ?>
                        <li class="has-children">
                          <a href="/home">Dashboard</a>
                          
                          <ul class="dropdown arrow-top">

                            <?php if(Auth::user()->user_type==='employer'): ?>
                            <li><a  href="<?php echo e(route('job.create')); ?>">
                                <?php echo e(__('Create new Job')); ?>

                              </a>
                            </li>
                            <li><a  href="<?php echo e(route('myjobs')); ?>">
                              <?php echo e(__('My Jobs')); ?>

                              </a>
                            </li>
                            <li><a  href="<?php echo e(route('company.create')); ?>">
                                <?php echo e(__('Company')); ?>

                              </a>
                            </li>

                            <li><a  href="<?php echo e(route('applicant')); ?>">
                                <?php echo e(__('Applicants')); ?>

                            </a></li>
                            <?php endif; ?>

                            <?php if(Auth::user()->user_type==='seeker'): ?>
                            <li><a  href="<?php echo e(route('user.profile')); ?>">
                                <?php echo e(__('Profile')); ?>

                            </a></li>
                            <li><a  href="<?php echo e(route('home')); ?>">
                                <?php echo e(__('Saved Jobs')); ?>

                            </a></li>
                            <?php endif; ?>





                          </ul>
                        </li>
                    
                        <?php else: ?>

                          <li><a href="/home">Dashboard</a></li>

                         <?php endif; ?>



                    <?php endif; ?>


                    <?php if(!Auth::check()): ?>
                      <li>
                        <a href="#" data-bs-target="#login-modal" data-toggle="modal" data-target="#login-modal" ><span class="bg-primary text-white py-3 px-3 rounded"><span class="icon-sign-in mr-3"></span>Login</span></a>
                      </li>
                    <?php else: ?>
                      <li>
                        <a class="bg-primary text-white py-3 px-3 rounded" href="<?php echo e(route('logout')); ?>"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          <span class="icon-sign-out mr-3"></span><?php echo e(__('Logout')); ?>

                      </a>
                      </li>

                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                          <?php echo csrf_field(); ?>
                      </form>
                      
                    <?php endif; ?>


                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  


  <!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content pb-4">
      <div class="modal-header mt-2 mb-2">
        <h5 class="modal-title" id="login-modal"><?php echo e(__('User/Employee/Admin')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
       
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                      
                    <div class="row mb-3">
                        <label for="email" class="col-md-12 col-form-label text-md-start"><?php echo e(__('Email Address')); ?></label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-12 col-form-label text-md-start"><?php echo e(__('Password')); ?></label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                <label class="form-check-label" for="remember">
                                    <?php echo e(__('Remember Me')); ?>

                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Login')); ?>

                            </button>

                            <?php if(Route::has('password.request')): ?>
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
  <!-- Modal -->


  <?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\JobFinder-Job-Portal-Laravel-Vue-Script\resources\views////frontend/partials/nav.blade.php ENDPATH**/ ?>