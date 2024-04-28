<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">My all Jobs</h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Jobs</a> </span> <span><span class="sep m-0"> ></span> Jobs</span></p>
  </div>
</div>

<div class="site-section bg-light">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>All recent jobs</h2></div>

                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Job Title:</th>
                                <th scope="col">Job Type:</th>
                                <th scope="col">Job posted:</th>
                                <th scope="col">Status:</th>
                                <th scope="col">Action:</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; ?>
                                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($i); ?></th>

                                        <td width="25%"><?php echo e($job->title); ?></td>
                                        
                                        <td><span class="badge badge-secondary"><?php echo e(Str::ucfirst($job->type)); ?></span></td>
                                        <td><span class="badge badge-info"><?php echo e($job->created_at->diffForHumans()); ?></span></td>



                                        <td>

                                            <?php if($job->status == '0'): ?>
                                                <a  class="badge badge-lg badge-danger text-white" href="<?php echo e(route('job.toggle',[$job->id])); ?>"
                                                    ><?php echo e(__('Draft')); ?></a>


                                            <?php else: ?>

                                                <a  class="badge badge-lg badge-success text-white" href="<?php echo e(route('job.toggle',[$job->id])); ?>"
                                                    ><?php echo e(__('Active')); ?></a>

                                               

                                            <?php endif; ?>
                                            
                                        </td>





                                        <td width="20%">
                                            
                                        
                                        &nbsp;<a class="btn btn-success btn-sm" href="<?php echo e(route('job.show', [$job->id, $job->slug])); ?>">View</a>
                                            &nbsp;<a href="<?php echo e(route('job.edit', [$job->id])); ?>" class="btn btn-secondary btn-sm">Edit</a>
                                            &nbsp;<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#companyJobDelete-<?php echo e($job->id); ?>" type="button">Delete</button>

                                            <!-- Delete modal -->
                                            <div class="modal fade" id="companyJobDelete-<?php echo e($job->id); ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-<?php echo e($job->id); ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title text-center" id="staticBackdropLabel-<?php echo e($job->id); ?>">Job Title : <?php echo e($job->title); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4> Do you want Delete?</h4>
                                                    </div>
                                                    <form action="<?php echo e(route('job.delete',[$job->id])); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="<?php echo e($job->id); ?>">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>


                                                </div>
                                                </div>
                                            </div>




                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\JobFinder-Job-Portal-Laravel-Vue-Script\resources\views/frontend/jobs/myjobs.blade.php ENDPATH**/ ?>