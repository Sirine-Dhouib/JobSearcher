<?php $__env->startSection('content'); ?>
        <!-- Dashboard Box -->
        <div class="row animated fadeInUp">
          <?php if(count($users) > 0): ?>
            
        
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-info o-hidden h-100">
                <div class="card-body pt-5 pb-5 d-flex align-items-center">
                  <div class="card-body-icon">
                    <i class="material-icons text-white md-5em">group</i>
                  </div>
                  <div class="ml-5">
                    <h3>( <?php echo e(count($users)); ?> ) </h3>
                    <p>Total Candidates</p>
                  </div>
                </div>
        
              </div>
            </div>
            <?php endif; ?>

            <?php if(count($activeJobs) > 0): ?>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body pt-5 pb-5 d-flex align-items-center">
                  <div class="card-body-icon">
    <i class="material-icons text-white md-5em">business_center</i>
                  </div>
                  <div class="ml-5">
                    <h3>( <?php echo e(count($activeJobs)); ?> )</h3>
                    <p>Total Active Jobs</p>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>

            <?php if(count($companies) > 0): ?>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body pt-5 pb-5 d-flex align-items-center">
                  <div class="card-body-icon">
    <i class="material-icons text-white md-5em">business</i>
    
                  </div>
                  <div class="ml-5">
                    <h3>( <?php echo e(count($companies)); ?> )</h3>
                    <p> Total Employes Jobs</p>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>

            <?php if(count($featuredJobs) > 0): ?>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body pt-5 pb-5 d-flex align-items-center">
                  <div class="card-body-icon">
    <i class="material-icons text-white md-5em">favorite</i>
                  </div>
                  <div class="ml-5">
                    <h3>( <?php echo e(count($featuredJobs)); ?> )</h3>
                    <p> Total Featured Jobs</p>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>

        </div>
         <!-- Dashboard Box --> 

         <div class="row mt-3">

          <div class="col-md-4">
              <div class="card">
                  <div class="card-body">
                      <div class="chart-container">
                          <canvas id="totalCount"></canvas>

                      </div>
                  </div>
              </div>
          </div>

          <?php if(count($weeklyUsers) > 0): ?>
          <div class="col-md-4">
            <div class="card">
                <div class="card-header">Recent Candidates</div>
                <div class="card-body pt-0 border-0">
                   <table class="table table-striped mb-0">
                      <thead>
                        <tr class="">
                            <th>Name</th>
                            <th >Created Date</th>
                            <th >Is Verified</th>
                        </tr>
                      </thead>

                        <tbody>
                            
                          <?php $__currentLoopData = $weeklyUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                               <td><?php echo e($user->name); ?></td>
                               <td ><?php echo e($user->created_at->diffForHumans()); ?></td>
                               <td>
                                            
                                  <?php if($user->email_verified_at): ?>
                                  <i class="material-icons  alert-success">check_circle</i>
                                  <?php else: ?>
                                  <i class="material-icons  alert-danger">close</i>
                                  <?php endif; ?>

                              </td>
                           </tr>
                            
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                        

                        </tbody>
                   </table>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <?php if(count($weeklyEmployee) > 0): ?>
        <div class="col-md-4">
          <div class="card">
              <div class="card-header">Recent Employers</div>
              <div class="card-body pt-0 ">
                  <table class="table table-striped mb-0">
                    <thead>
                      <tr class="">
                          <th>Name</th>
                          <th >Created Date</th>
                          <th >Is Verified</th>
                      </tr>
                    </thead>

                      <tbody>
                          
                        <?php $__currentLoopData = $weeklyEmployee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                              <td><?php echo e($user->company->cname); ?></td>
                              <td ><?php echo e($user->created_at->diffForHumans()); ?></td>
                              <td>
                                          
                                <?php if($user->email_verified_at): ?>
                                <i class="material-icons  alert-success">check_circle</i>
                                <?php else: ?>
                                <i class="material-icons  alert-danger">close</i>
                                <?php endif; ?>

                            </td>
                          </tr>
                          
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                      

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <?php endif; ?>





      </div>

      <div class="row mt-3">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="weekly-visitor"></canvas>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!--====== Chart.min js ======-->
    <script src="<?php echo e(asset('backend/assets/js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/Chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/chartfunction.js')); ?>"></script>


    <script>
      // Fetch your data from the server
      const data = {
          employes: <?php echo e($companies ? count($companies) : 0); ?>,
          users: <?php echo e($users ? count($users) : 0); ?>,
          jobs: <?php echo e($activeJobs ? count($activeJobs) : 0); ?>

      };


      // Create the pie chart
      const ctx = document.getElementById('totalCount').getContext('2d');
      new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Employes', 'Users', 'Jobs'],
          datasets: [{
          data: [data.employes, data.users, data.jobs],
          backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
          }]
      }
      });


      const weeklyVisitor = document.getElementById('weekly-visitor');

      new Chart(weeklyVisitor, {
      type: 'line',
      data: {
          labels: ['Saturday','Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
          datasets: [{
          label: 'Weekly Visitor',
          data: [3, 0, 3, 2, 4, 3, 2],
          borderWidth: 1,
           backgroundColor: ['#17a2b8', '#ffc107', '#28a745', '#dc3545', '#007bff', '#6c757d', '#343a40']
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
      });
  </script>



    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\Job Searcher\resources\views/admin/index.blade.php ENDPATH**/ ?>