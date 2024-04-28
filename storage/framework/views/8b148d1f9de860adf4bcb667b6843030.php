<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 1.5rem;">Edit the Job: <?php echo e($job->title); ?></h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Jobs</a> </span> <span><span class="sep m-0"> ></span> Single job</span></p>
  </div>
</div>

<div class="site-section bg-light">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    

                    <form action="<?php echo e(route('job.update', [$job->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="card">
                            <div class="card-header">
                                <h3>Update a job</h3>
                            </div>
            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" value="<?php echo e($job->title); ?>" class="form-control">
                                    <?php if($errors->has('title')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('title')); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <div class="form-group mt-3">
                                    <label for="position">Position:</label>
                                    <input type="text" name="position" value="<?php echo e($job->position); ?>" class="form-control">
                                    <?php if($errors->has('position')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('position')); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <div class="form-group mt-3">
                                    <label for="experience">Year of experience:</label>
                                    <input type="text" name="experience" class="form-control<?php echo e($errors->has('experience') ? ' is-invalid' : ''); ?>"  value="<?php echo e($job->experience); ?>">
                                    <?php if($errors->has('experience')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('experience')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
            
                                <div class="form-group mt-3">
                                    <label for="type">Job Type: </label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="fulltime"<?php echo e($job->type=='Fulltime' ? 'selected':''); ?>>Fulltime</option>
                                        <option value="partime"<?php echo e($job->type=='Partime' ? 'selected':''); ?>>Partime</option>
                                        <option value="remote"<?php echo e($job->type=='Remote' ? 'selected':''); ?>>Remote</option>
                                        
                                    </select>
                                    <?php if($errors->has('type')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('type')); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <div class="form-group mt-3">
                                    <label for="category">Category:</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <?php $__currentLoopData = App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cat->id); ?>" <?php echo e($cat->id==$job->category_id ? 'selected':''); ?>><?php echo e($cat->name); ?></option>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('category')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('category')); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <div class="form-group mt-3">
                                    <label for="address">Address:</label>
                                    <input type="text" name="address" value="<?php echo e($job->address); ?>" class="form-control">
                                    <?php if($errors->has('address')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('address')); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
            
                                <div class="form-group mt-3">
                                    <label for="roles">Role:</label>
                                    <textarea name="roles" id="roles" style="height: 80px" class="form-control" ><?php echo e($job->roles); ?></textarea>
                                    <?php if($errors->has('roles')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('roles')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="description">Description:</label>
                                    <textarea name="description" id="description" style="height: 120px"  class="form-control" ><?php echo e($job->description); ?></textarea>
                                    <?php if($errors->has('description')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('description')); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
            

                                <div class="form-group mt-3">
                                    <label for="number_of_vacancy">No of vacancy:</label>
                                    <input type="text" name="number_of_vacancy" class="form-control<?php echo e($errors->has('number_of_vacancy') ? ' is-invalid' : ''); ?>"  value="<?php echo e($job->number_of_vacancy); ?>">
                                    <?php if($errors->has('number_of_vacancy')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('number_of_vacancy')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                    

                    
                                <div class="form-group mt-3">
                                    <label for="type">Gender:</label>
                                    <select class="form-control" name="gender">
                                        <option value="any"<?php echo e($job->gender=='any' ? 'selected':''); ?>>Any</option>
                                        <option value="male"<?php echo e($job->gender=='male' ? 'selected':''); ?>>Male</option>
                                        <option value="female"<?php echo e($job->gender=='female' ? 'selected':''); ?>>Female</option>
                                    
                                    </select>
                                </div>
                    
                                <div class="form-group mt-3">
                                    <label for="type">Salary/year:</label>
                                    <select class="form-control" name="salary">
                                        <option value="negotiable"<?php echo e($job->salary=='negotiable' ? 'selected':''); ?>>Negotiable</option>
                                        <option value="2000-5000"<?php echo e($job->salary=='2000-5000' ? 'selected':''); ?>>2000-5000</option>
                                        <option value="50000-10000"<?php echo e($job->salary=='50000-10000' ? 'selected':''); ?>>5000-10000</option>
                                        <option value="10000-20000"<?php echo e($job->salary=='10000-20000' ? 'selected':''); ?>>10000-20000</option>
                                        <option value="30000-500000"<?php echo e($job->salary=='30000-500000' ? 'selected':''); ?>>50000-500000</option>
                                        <option value="500000-600000"<?php echo e($job->salary=='500000-600000' ? 'selected':''); ?>>500000-600000</option>
                    
                                        <option value="600000 plus"<?php echo e($job->salary=='600000 plus' ? 'selected':''); ?>>600000 plus</option>
                                    </select>
                                </div>


                                <div class="form-group mt-3">
                                    <label for="status">Status: </label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1"<?php echo e($job->status=='1' ? 'selected':''); ?>>Live</option>
                                        <option value="0"<?php echo e($job->status=='0' ? 'selected':''); ?>>Draft</option>
                                    </select>
                                    <?php if($errors->has('status')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('status')); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
            
                                
                                <div class="form-group mt-3">
                                    <label for="last_date">Job apply last date:</label>
                                    <input type="date" name="last_date" value="<?php echo e($job->last_date); ?>" class="form-control">
                                    <?php if($errors->has('last_date')): ?>
                                        <div style="color:red">
                                            <p class="mb-0"><?php echo e($errors->first('last_date')); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                
                                <div class="form-group mt-3">
                                    <button class=" btn btn-dark" type="submit">Update job</button>
                                </div>
                                
                            

                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\JobFinder-Job-Portal-Laravel-Vue-Script\resources\views/frontend/jobs/edit.blade.php ENDPATH**/ ?>