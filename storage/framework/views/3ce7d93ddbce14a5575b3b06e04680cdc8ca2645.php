  
    
 <?php $__env->startSection('content'); ?> 
    <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left">Item List</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="">Receiving</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- Bootstrap Grid start -->
            <div class="col-12 mt-5">
            <!-- <div class="header-title">Add</div> -->
                <!-- Start 6 column grid system -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title">Add Item</h5>
                                <form action="/store-details" method = "POST" class="form" id="InputDetails">
                               <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($paramId); ?>" name="paramId">
                                    <div class="form-group">
                                        <label for="Receiving Date">Receiving Date</label>
                                        <input type="date" class="form-control form-control-sm input-rounded " id="Receiving Date" name="ReceivingDate">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Item</label>
                                        <select class="form-control form-control-sm input-rounded" id="product-select">
                                            <?php $__empty_1 = true; $__currentLoopData = $productList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productLists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($productLists->ID); ?>"><?php echo e($productLists->InventoryName); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <option>No data found.</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ItemCode">Item Code</label>
                                        <input type="text" class="form-control form-control-sm input-rounded" id="ItemCode" name="ItemCode" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="UOM">UOM</label>
                                        <input type="text" class="form-control form-control-sm input-rounded" id="UOM" name="UOM" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="PO_QTY">SO Quantity</label>
                                        <input type="number" class="form-control form-control-sm input-rounded" id="PO_QTY" name="PO_QTY" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="REC_QTY">Record Quantity</label>
                                        <input type="number" class="form-control form-control-sm input-rounded" id="REC_QTY" name="REC_QTY">
                                    </div>
                                    <div class="form-group">
                                        <label for="Discrepancy">Discrepancy</label>
                                        <input type="number" class="form-control form-control-sm input-rounded" id="Discrepancy" name="Discrepancy" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Barcode">Barcode</label>
                                        <input type="number" class="form-control form-control-sm input-rounded" id="Barcode" name="Barcode">
                                    </div>
                                    <div class="form-group">
                                        <label for="Remarks">Remarks</label>
                                        <textarea class="form-control form-control-sm input-rounded" rows="3" id="Remarks" name="Remarks"></textarea> 
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-info mb-3">Submit</button>
                                    <a href="" class="btn btn-rounded btn-info mb-3"><i class="fa fa-edit"></i></a> </td>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- data table start -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">List</h4>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Please see the delivery details before receiving the items:</span>
                                <div class="data-tables table-responsive">
                                    <table id="dataTable_details" class="text-center">
                                        <?php echo csrf_field(); ?>	
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Receiving Date</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Item Code</th>
                                                <th scope="col">UOM</th>
                                                <th scope="col">BarCode</th>
                                                <th scope="col">SO Quantity</th>
                                                <th scope="col">REC Quantity</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Remarks</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $__empty_1 = true; $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                <td><?php echo e($detail->TransactionID); ?></td>
                                                <td><?php echo e($detail->ReceivingDate); ?></td>
                                                <td><?php echo e($detail->InventoryName); ?></td>
                                                <td><?php echo e($detail->ItemCode); ?></td>
                                                <td><?php echo e($detail->UOM_Desc); ?></td>
                                                <td><?php echo e($detail->Barcode); ?></td>
                                                <td><?php echo e($detail->PO_QTY); ?></td>
                                                <td><?php echo e($detail->REC_QTY); ?></td>
                                                <td><?php echo e($detail->Status); ?></td>
                                                <td><?php echo e($detail->Remarks); ?></td>

                                                <td>
                                                     <button id="fetchDataButton" class="btn btn-rounded btn-info mb-3 edit-button" data-transaction-id="<?php echo e($detail->TransactionID); ?>"><i class="fa fa-edit">E</i></button>
                                                     <!-- <a href="/receiving-list/<?php echo e($detail->TransactionID); ?>/edit" class="btn btn-rounded btn-info mb-3"><i class="fa fa-edit"></i></a> </td> -->
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
                        <!-- data table end --> 
                    </div>
                </div>
            <!-- </div> -->
            <!-- Bootstrap Grid end -->
            </div>
        </div>
    </div>
            
    <!-- main content area end -->

<script type="text/javascript">
    const productSelect = document.getElementById('product-select');
    const inventoryIdInput  = document.getElementById('ItemCode');
    const UOMInput  = document.getElementById('UOM');

    productSelect.addEventListener('change', () => {
    const selectedProductId = productSelect.value;
    
    fetch(`/get-itemcode/${selectedProductId}`)
        .then(response => response.json())
        .then(data => {
            inventoryIdInput.value = data.InventoryID;
            UOMInput.value = data.Packaging;
        })
        .catch(error => {
            console.error('Error fetching inventory name:', error);
        });
});

$(document).ready(function() {
        $('#fetchDataButton').click(function() {
            alert('hello');
        var transactionId = $(this).data('transaction-id');
        // Make an AJAX request to fetch the details of the transaction
        $.ajax({
            url: '/get-transaction-details/' + transactionId, // Replace with the correct URL
            type: 'GET',
            success: function(data) {
                // Populate the form fields with the fetched data
                $('#ReceivingDate').val(data.ReceivingDate);
                $('#product-select').val(data.productId);
                $('#ItemCode').val(data.ItemCode);
                $('#UOM').val(data.UOM);
                $('#PO_QTY').val(data.PO_QTY);
                $('#REC_QTY').val(data.REC_QTY);
                $('#Discrepancy').val(data.Discrepancy);
                $('#Barcode').val(data.Barcode);
                $('#Remarks').val(data.Remarks);

                // Show the form
                $('#InputDetails').show();
            },
            error: function(error) {
                console.error('Error fetching transaction details:', error);
            }
        });
    });
});


</script>
<script>
   
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Eyelix-FoodCostingApp\resources\views/Receiving/ItemList.blade.php ENDPATH**/ ?>