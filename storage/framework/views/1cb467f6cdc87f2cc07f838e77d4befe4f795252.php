  
    
 <?php $__env->startSection('content'); ?> 
    <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left">SO</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="">Receiving</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- page title area end -->
    <div class="main-content-inner">
                    <!-- Large modal start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="modal fade bd-example-modal-lg">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create SO</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                        </div>
                                        <form action="/store-so" method = "POST" class="form">
										    <?php echo csrf_field(); ?>	
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-4 col-form-label">Transaction Type</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="text" value="REC" id="example-text-input" name="TransactionType" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="totItem-input" class="col-4 col-form-label">Total Item</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="number" value="0" id="totItem-input" name ="TotalItem" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="totItem-input" class="col-4 col-form-label">Total Quantity</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="number" value="0" id="totqty-input" name ="TOTALQUANTITY" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Large modal modal end -->


                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Receiving Actual Delivery</h4>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Please see the delivery details before receiving the items:</span>
                                    <button type="button" class="btn btn-rounded btn-info mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">+
                                </button>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
										<?php echo csrf_field(); ?>	
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Received Date</th>
                                                <th scope="col">Total Items</th>
                                                <th scope="col">Receiving Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                <td><?php echo e($row->Id); ?></td>
                                                <td><?php echo e($row->OrderDate); ?></td>
                                                <td><?php echo e($row->ReceivingDate); ?></td>
                                                <td><?php echo e($row->Total_Item); ?></td>
                                                <td><?php echo e($row->Status); ?></td>
                                                <td>
                                                     <a href="/receiving-list/<?php echo e($row->Id); ?>" class="btn btn-rounded btn-info mb-3"><i class="fa fa-folder-open"></i></a>
                                                </td>
                                                
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="6">No data found.</td>
                                                </tr>
                                                <?php endif; ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->

   
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Eyelix-FoodCostingApp\resources\views/Receiving/createSO.blade.php ENDPATH**/ ?>