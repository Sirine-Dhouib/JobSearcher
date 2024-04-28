<?php $__env->startSection('content'); ?>

       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
          </ol>
        </nav>
        <div class="create-item">
            <a href=<?php echo e(route('adminTestimonial')); ?> class="theme-primary-btn btn btn-primary"><i class="material-icons">add</i>&nbsp;Create new testimonial</a>

           
          
        </div>
    </div>
      <!--  Header BreadCrumb --> 

        <!-- Users DataTable-->
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card bg-white">
                    <div class="card-body mt-3">
                      <div class="table-responsive">
                          <table id="usersTable" class="table table-striped table-borderless" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL</th>
                               
                                    <th>Author Name</th>
                                    <th>Author Profession</th>
                                    <th>Author Info</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                   
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php $i=0; ?>
                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++ ?>
                                    
    
                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        
                                        <td><?php echo e($testimonial->name); ?></td>
                                        <td><?php echo e($testimonial->profession); ?></td>
                                        <td><?php echo e(Str::limit($testimonial->content, 50)); ?></td>
                                        <td>
                                            
                                            <span class="badge badge-secondary"><?php echo e($testimonial->created_at->diffForHumans()); ?></span>

                                        </td>
                                        <td>
                                            <?php if($testimonial->status == '0'): ?>
                                                <a  class="badge badge-lg badge-danger text-white" href="<?php echo e(route('adminTestiToggle',[$testimonial->id])); ?>"
                                                    ><?php echo e(__('Deactive')); ?></a>


                                            <?php else: ?>

                                                <a  class="badge badge-lg badge-success text-white" href="<?php echo e(route('adminTestiToggle',[$testimonial->id])); ?>"
                                                    ><?php echo e(__('Active')); ?></a>

                                               

                                            <?php endif; ?>
                                            
                                        </td>
                                       
                                        <td style="width: 18%">
                                            <a  class="btn btn-sm btn-info" href="<?php echo e(route('adminTestiUpdate',[$testimonial->id])); ?>"><i class="material-icons">edit</i></a> 


                                          <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#testimonial-<?php echo e($testimonial->id); ?>" type="button"><i class="material-icons">delete</i></button>

                                            <!-- Delete modal -->
                                            <div class="modal fade" id="testimonial-<?php echo e($testimonial->id); ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-<?php echo e($testimonial->id); ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title text-center" id="staticBackdropLabel-<?php echo e($testimonial->id); ?>">Name: <?php echo e($testimonial->name); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4> Do you want delete Testimonial?</h4>
                                                    </div>
                                                    <form action="<?php echo e(route('adminTestiDelete',[$testimonial->id])); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="<?php echo e($testimonial->id); ?>">
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
                             



                        </table>
                      </div>
                    </div>
                </div>
            </div>

        </div>

         <!-- Users DataTable-->   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\Job Searcher\resources\views/admin/testimonials/index.blade.php ENDPATH**/ ?>